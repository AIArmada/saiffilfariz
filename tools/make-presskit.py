#!/usr/bin/env python3
"""
Press-kit portraits for the speaker media kit.

Source  : assets/img/profile/<slug>.png            (full size, transparent cutouts)
Output  : public/assets/img/press/press-<slug>-square.png  (1080x1080 head/shoulders crop)
          public/assets/img/press/press-<slug>-full.png    (full body, capped at 1600px)

PNG keeps the alpha channel: press users can place the cutout on any
background. Square crops take the top square of the 3:4 full-body frame,
which holds head and shoulders for every portrait in the set.

The curated press set lives in config/site.php (media_kit.press_portraits);
run with a slug to (re)build one portrait, or no args for the whole set.

Run:  python3 tools/make-presskit.py [slug]
Idempotent: a derivative is only rebuilt when the source is newer.
"""

import json
import sys
from pathlib import Path

from PIL import Image, ImageOps

ROOT = Path(__file__).resolve().parent.parent
SRC = ROOT / "assets" / "img" / "profile"
OUT = ROOT / "public" / "assets" / "img" / "press"

SQUARE = 900
FULL_MAX = 1400


def fresh(src: Path, dest: Path) -> bool:
    return dest.exists() and dest.stat().st_mtime >= src.stat().st_mtime


def build_square(img: Image.Image) -> Image.Image:
    side = min(img.width, img.height)
    top = img.crop((0, 0, side, side))
    if side != SQUARE:
        top = top.resize((SQUARE, SQUARE), Image.LANCZOS)
    return top


def build_full(img: Image.Image) -> Image.Image:
    if max(img.size) <= FULL_MAX:
        return img.copy()
    scale = FULL_MAX / max(img.size)
    size = (round(img.width * scale), round(img.height * scale))
    return img.resize(size, Image.LANCZOS)


def build(slug: str) -> dict:
    src = SRC / f"{slug}.png"
    if not src.exists():
        raise SystemExit(f"no source: {src}")
    sizes = {}
    with Image.open(src) as raw:
        img = ImageOps.exif_transpose(raw)
        for kind, maker in (("square", build_square), ("full", build_full)):
            dest = OUT / f"press-{slug}-{kind}.png"
            if not fresh(src, dest):
                maker(img).save(dest, "PNG", optimize=True)
                print(f"  wrote {dest.name}")
            else:
                print(f"  fresh {dest.name}")
            with Image.open(dest) as done:
                sizes[kind] = list(done.size)
    return sizes


def main(argv: list[str]) -> int:
    OUT.mkdir(parents=True, exist_ok=True)
    slugs = argv[1:] or ["metallicgold", "charcoalgrey", "mustardshirt", "brocadecladpresenter"]
    manifest_path = OUT / "press.json"
    manifest = json.loads(manifest_path.read_text()) if manifest_path.exists() else {}
    for slug in slugs:
        manifest[slug] = build(slug)
    manifest_path.write_text(json.dumps(manifest, indent=1, sort_keys=True) + "\n")
    print("press manifest updated")
    return 0


if __name__ == "__main__":
    sys.exit(main(sys.argv))
