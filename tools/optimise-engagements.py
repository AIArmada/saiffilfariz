#!/usr/bin/env python3
"""
Build web-ready derivatives for engagement photos.

Source  : assets/img/engagements/<slug>/{cover.jpg,01.jpg,…}   (full size, not public)
Output  : public/assets/img/opt/talk-<slug>-<w>.webp            (cover, joins the global manifest)
          public/assets/img/engagements/<slug>/<NN>-<w>.webp    (gallery)
          public/assets/img/engagements/<slug>/manifest.json    (gallery manifest)

Curation lives in assets/data/engagements.json -> "gallery": ["01","12",…].
Without it, every photograph in the folder is used (except any frame that is
byte-identical to cover.jpg) — the sessions were large, and hiding most of them
hides the point.

Run:  python3 tools/optimise-engagements.py [slug …]
Idempotent: a derivative is only rebuilt when the source is newer.
"""

import filecmp
import json
import os
import sys
from pathlib import Path

from PIL import Image, ImageOps

ROOT = Path(__file__).resolve().parent.parent
SRC = ROOT / "assets" / "img" / "engagements"
DATA = ROOT / "assets" / "data" / "engagements.json"
OPT = ROOT / "public" / "assets" / "img" / "opt"
GAL = ROOT / "public" / "assets" / "img" / "engagements"
MANIFEST = OPT / "manifest.json"

COVER_WIDTHS = [480, 800, 1200, 1600]
# 400 is the mobile tile (~170px at 2× DPR); 640 the desktop one; 1400 the viewer.
GALLERY_WIDTHS = [400, 640, 1400]
QUALITY = 78
FALLBACK_WIDTH = 1200


def load_manifest() -> dict:
    if MANIFEST.exists():
        return json.loads(MANIFEST.read_text())
    return {}


def save_manifest(m: dict) -> None:
    MANIFEST.write_text(json.dumps(m, indent=1, sort_keys=True) + "\n")


def fresh(src: Path, dest: Path) -> bool:
    return dest.exists() and dest.stat().st_mtime >= src.stat().st_mtime


def resize_to(img: Image.Image, width: int) -> Image.Image:
    if img.width <= width:
        return img.copy()
    height = round(img.height * width / img.width)
    return img.resize((width, height), Image.LANCZOS)


def build_variants(src: Path, dest_dir: Path, stem: str, widths: list[int],
                   manifest: dict, keep_original: bool = False) -> dict:
    """Write webp variants and return {w, h, variants} for the manifest.

    keep_original adds the source's own width to the ladder when it sits below
    the top step — otherwise a 1200px original never gets a viewer-sized file
    and the lightbox falls back to the 640px tile.
    """
    with Image.open(src) as raw:
        img = ImageOps.exif_transpose(raw).convert("RGB")
        full_w, full_h = img.size
        ladder = [w for w in widths if w <= full_w]

        if keep_original and widths and full_w < max(widths) and full_w not in ladder:
            ladder = sorted(ladder + [full_w])

        written = []

        for width in ladder:
            out = dest_dir / f"{stem}-{width}.webp"
            if not fresh(src, out):
                resize_to(img, width).save(out, "WEBP", quality=QUALITY, method=6)
            written.append(width)

        # A 1200px JPEG keeps older browsers and previews working.
        jpg = dest_dir / f"{stem}-{min(FALLBACK_WIDTH, full_w)}.jpg"
        if not fresh(src, jpg):
            resize_to(img, min(FALLBACK_WIDTH, full_w)).save(jpg, "JPEG", quality=80, optimize=True)

    return {"w": full_w, "h": full_h, "variants": written}


def build_letter_thumb(pdf_path: Path, stem: str, manifest: dict) -> dict | None:
    """Render page 1 of a proof document as a card thumbnail."""
    try:
        import pymupdf
    except ImportError:
        print("  ! pymupdf not installed — skipping letter thumbnail")
        return None

    if not pdf_path.exists():
        print(f"  ! letter not found: {pdf_path.name}")
        return None

    doc = pymupdf.open(pdf_path)
    png = doc[0].get_pixmap(dpi=110).tobytes("png")

    from io import BytesIO

    img = Image.open(BytesIO(png)).convert("RGB")
    img = ImageOps.expand(img, border=2, fill=(226, 218, 203))  # hairline, like the card border

    written = []
    for width in (480, 800):
        out = OPT / f"{stem}-{width}.webp"
        if not fresh(pdf_path, out):
            im = img if img.width <= width else img.resize(
                (width, round(img.height * width / img.width)), Image.LANCZOS
            )
            im.save(out, "WEBP", quality=82, method=6)
        written.append(width)

    jpg = OPT / f"{stem}-800.jpg"
    if not fresh(pdf_path, jpg):
        img.resize((800, round(img.height * 800 / img.width)), Image.LANCZOS).save(
            jpg, "JPEG", quality=82, optimize=True
        )

    return {"w": img.width, "h": img.height, "variants": written}


def main() -> None:
    only = set(sys.argv[1:])
    data = json.loads(DATA.read_text())
    entries = {e["slug"]: e for e in data["engagements"]}

    manifest = load_manifest()
    built = 0

    for folder in sorted(SRC.iterdir()):
        if not folder.is_dir() or folder.name.startswith("_"):
            continue
        slug = folder.name
        if only and slug not in only:
            continue

        cover_src = folder / "cover.jpg"
        if not cover_src.exists():
            print(f"· {slug}: no cover.jpg, skipped")
            continue

        entry = entries.get(slug, {})

        # "gallery" is a curation override. Without it, every photograph in the
        # folder is used — those are the sessions he actually ran, and showing
        # a hand-picked dozen hides the volume. One exception: a frame that is
        # byte-identical to cover.jpg is already the hero, so skip it.
        if entry.get("gallery"):
            picked = entry["gallery"]
        else:
            picked = [
                path.stem
                for path in sorted(folder.glob("[0-9][0-9].jpg"))
                if not filecmp.cmp(path, cover_src, shallow=False)
            ]

        # ---- cover: joins the global <x-photo> manifest ----
        key = f"talk-{slug}"
        manifest[key] = build_variants(cover_src, OPT, key, COVER_WIDTHS, manifest)

        # ---- gallery ----
        out_dir = GAL / slug
        out_dir.mkdir(parents=True, exist_ok=True)
        gallery = []

        for name in picked:
            src = folder / f"{name}.jpg"
            if not src.exists():
                print(f"  ! {slug}: missing {name}.jpg")
                continue
            info = build_variants(src, out_dir, name, GALLERY_WIDTHS, manifest, keep_original=True)
            gallery.append({"id": name, **info})

        (out_dir / "manifest.json").write_text(json.dumps({"gallery": gallery}, indent=1) + "\n")
        built += 1
        print(f"✓ {slug}: cover + {len(gallery)} gallery frames")

    # ---- letters of appreciation ----
    for slug, entry in entries.items():
        letter = entry.get("letter")
        if not letter:
            continue
        if only and slug not in only:
            continue
        info = build_letter_thumb(ROOT / "public" / letter["file"], f"talk-{slug}-letter", manifest)
        if info:
            manifest[f"talk-{slug}-letter"] = info
            print(f"✓ {slug}: letter thumbnail")

    save_manifest(manifest)
    print(f"done — {built} engagement(s)")


if __name__ == "__main__":
    main()
