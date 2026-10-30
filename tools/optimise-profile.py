#!/usr/bin/env python3
"""
Build web-ready derivatives for owner profile portraits.

Source  : assets/img/profile/<slug>.png            (full size, transparent cutouts)
Output  : public/assets/img/opt/profile-<slug>-<w>.webp   (joins the global manifest)

Unlike optimise-engagements.py this keeps the alpha channel: the portraits are
cutouts meant to float on section backgrounds, and an RGB convert would bake a
black box behind them. No JPEG fallback is written for the same reason; the
<x-photo> component falls back to the widest webp when no JPG exists.

Run:  python3 tools/optimise-profile.py
Idempotent: a derivative is only rebuilt when the source is newer.
"""

import json
import sys
from pathlib import Path

from PIL import Image, ImageOps

ROOT = Path(__file__).resolve().parent.parent
SRC = ROOT / "assets" / "img" / "profile"
OPT = ROOT / "public" / "assets" / "img" / "opt"
MANIFEST = OPT / "manifest.json"

WIDTHS = [480, 800, 1200, 1536]
QUALITY = 78


def load_manifest() -> dict:
    if MANIFEST.exists():
        return json.loads(MANIFEST.read_text())
    return {}


def save_manifest(m: dict) -> None:
    MANIFEST.write_text(json.dumps(m, indent=1, sort_keys=True) + "\n")


def fresh(src: Path, dest: Path) -> bool:
    return dest.exists() and dest.stat().st_mtime >= src.stat().st_mtime


def main() -> int:
    if not SRC.exists():
        print(f"no sources in {SRC}")
        return 1

    manifest = load_manifest()
    OPT.mkdir(parents=True, exist_ok=True)

    for src in sorted(SRC.glob("*.png")):
        stem = f"profile-{src.stem}"
        with Image.open(src) as raw:
            img = ImageOps.exif_transpose(raw)
            has_alpha = img.mode in ("RGBA", "LA")
            full_w, full_h = img.size
            ladder = [w for w in WIDTHS if w <= full_w]
            if full_w not in ladder:
                ladder = sorted(ladder + [full_w])

            for width in ladder:
                out = OPT / f"{stem}-{width}.webp"
                if fresh(src, out):
                    continue
                if width >= full_w:
                    frame = img.copy()
                else:
                    height = round(img.height * width / img.width)
                    frame = img.resize((width, height), Image.LANCZOS)
                frame.save(out, "WEBP", quality=QUALITY, method=6)
                print(f"  wrote {out.name} ({'alpha' if has_alpha else 'opaque'})")

        manifest[stem] = {"w": full_w, "h": full_h, "variants": ladder}
        print(f"{stem}: {full_w}x{full_h} {ladder}")

    save_manifest(manifest)
    print("manifest updated")
    return 0


if __name__ == "__main__":
    sys.exit(main())
