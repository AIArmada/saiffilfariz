#!/bin/bash
# Download + prep engagement photos from Google Drive.
# Usage:
#   ./tools/download-drive.sh <drive_folder_id_or_url> <slug>
# Example:
#   ./tools/download-drive.sh 1RHWYTIe93aOZsAMBmy-OKPHqMIxAVpAJ matrade-celik-ai-2026-08
# Requires: pip install gdown  +  (macOS) brew install imagemagick heif-convert
set -e
SRC="$1"; SLUG="$2"
if [ -z "$SRC" ] || [ -z "$SLUG" ]; then echo "Usage: $0 <drive_id_or_url> <slug>"; exit 1; fi
ID=$(echo "$SRC" | grep -oE '[A-Za-z0-9_-]{20,}' | head -1)
DEST="assets/img/engagements/$SLUG/raw"
OUT="assets/img/engagements/$SLUG"
mkdir -p "$DEST"
echo "→ downloading Drive folder $ID → $DEST"
gdown --folder "https://drive.google.com/drive/folders/$ID" -O "$DEST" --remaining-ok || {
  echo "gdown failed. Alternative: open the Drive link, download ZIP manually into $DEST"; exit 1; }
echo "→ converting HEIC → JPG + compressing to web size (1600px, q80)"
cd "$OUT"
mkdir -p raw
# move everything downloaded into raw if needed
find . -maxdepth 2 -type f \( -iname '*.jpg' -o -iname '*.jpeg' -o -iname '*.heic' -o -iname '*.png' \) -exec mv {} raw/ \; 2>/dev/null || true
i=1
for f in raw/*; do
  [ -f "$f" ] || continue
  ext=$(echo "${f##*.}" | tr '[:upper:]' '[:lower:]')
  if [ "$ext" = "heic" ]; then
    if command -v heif-convert >/dev/null; then heif-convert "$f" "tmp.jpg" && f="tmp.jpg"; else sips -s format jpeg "$f" --out "tmp.jpg" && f="tmp.jpg"; fi
  fi
  # pick cover = first landscape-ish; simply first file = cover
  if [ $i -eq 1 ]; then magick "$f" -auto-orient -resize 1600x -quality 80 "cover.jpg"; fi
  magick "$f" -auto-orient -resize 1600x -quality 78 "$(printf '%02d.jpg' $i)"
  i=$((i+1)); rm -f tmp.jpg
done
echo "✓ done: $OUT/cover.jpg + 01.jpg… (delete raw/ to save space)"
ls -lh "$OUT" | head -20
