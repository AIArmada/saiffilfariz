#!/usr/bin/env python3
"""
Build web-ready derivatives for series announcement posters.

Source  : assets/img/engagements/<poster_dir>/<NN>.jpg     (full size, not public)
Output  : public/assets/img/series/<slug>/<NN>-<w>.webp
          public/assets/img/series/<slug>/manifest.json

Posters are square-ish social graphics, not photographs, so they get their own
width ladder and no cropping. The widest variant is what the viewer opens.

Which posters exist is decided by assets/data/series.json -> episodes[].poster.

Run:  python3 tools/optimise-series.py [slug …]
Idempotent: a derivative is only rebuilt when the source is newer.
"""

import json
import sys
from pathlib import Path

from PIL import Image, ImageOps

ROOT = Path(__file__).resolve().parent.parent
SRC = ROOT / "assets" / "img" / "engagements"
DATA = ROOT / "assets" / "data" / "series.json"
OUT = ROOT / "public" / "assets" / "img" / "series"

WIDTHS = [420, 700, 1080]
QUALITY = 80


def fresh(src: Path, dest: Path) -> bool:
    return dest.exists() and dest.stat().st_mtime >= src.stat().st_mtime


def build(src: Path, dest_dir: Path, stem: str) -> dict | None:
    with Image.open(src) as raw:
        img = ImageOps.exif_transpose(raw).convert("RGB")
        full_w, full_h = img.size
        written = []

        for width in WIDTHS:
            if width > full_w:
                continue
            out = dest_dir / f"{stem}-{width}.webp"
            if not fresh(src, out):
                height = round(full_h * width / full_w)
                img.resize((width, height), Image.LANCZOS).save(
                    out, "WEBP", quality=QUALITY, method=6
                )
            written.append(width)

    if not written:
        return None

    return {"id": stem, "w": full_w, "h": full_h, "variants": written}


def main() -> None:
    only = set(sys.argv[1:])
    data = json.loads(DATA.read_text())
    built = 0

    for series in data["series"]:
        slug = series["slug"]
        if only and slug not in only:
            continue

        src_dir = SRC / series["poster_dir"]
        dest_dir = OUT / slug
        dest_dir.mkdir(parents=True, exist_ok=True)

        manifest_path = dest_dir / "manifest.json"
        manifest = json.loads(manifest_path.read_text()) if manifest_path.exists() else {}
        gallery = []

        for episode in series["episodes"]:
            stem = episode["poster"]
            candidates = sorted(src_dir.glob(f"{stem}.*"))

            if not candidates:
                print(f"  ! {slug}: no source for poster {stem}")
                continue

            entry = build(candidates[0], dest_dir, stem)
            if entry:
                manifest[stem] = entry
                gallery.append(entry)
                built += 1

        manifest_path.write_text(json.dumps(manifest, indent=1, sort_keys=True) + "\n")

        print(f"· {slug}: {len(gallery)} posters")

    total = sum(f.stat().st_size for f in OUT.rglob("*.webp"))
    print(f"done — {built} rebuilt, {total / 1_048_576:.2f} MB on disk")


if __name__ == "__main__":
    main()
