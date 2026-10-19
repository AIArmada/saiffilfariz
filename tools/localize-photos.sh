#!/bin/bash
# Stream-download Drive photos, compress to web size, delete raw immediately.
# Usage: ./tools/localize-photos.sh
# Reads /tmp/drive_ids.json  ->  assets/img/engagements/<slug>/
set -u
ROOT="/Users/Saiffil/Herd/saiffilfariz/assets/img/engagements"
LOG="/tmp/localize.log"
: > "$LOG"

dl_one() { # $1=fileid $2=dest_tmp
  curl -sL --retry 3 --max-time 300 "https://drive.google.com/uc?export=download&id=$1" -o "$2" >>"$LOG" 2>&1
}

process_one() { # $1=raw $2=final $3=orig_name (for type detection)
  local raw="$1" final="$2" oname="${3:-$1}"
  local sz
  sz=$(stat -f%z "$raw" 2>/dev/null || echo 0)
  if [ "$sz" -lt 20000 ]; then echo "SKIP small/corrupt: $oname ($sz)"; return 1; fi
  case "$oname" in
    *.HEIC|*.heic)
      sips -s format jpeg "$raw" --out "${raw}.jpg" >/dev/null 2>&1 || return 1
      raw="${raw}.jpg" ;;
  esac
  # belt-and-braces: refuse to ship HEIF bytes as .jpg
  if file "$raw" | grep -qi heif; then
    sips -s format jpeg "$raw" --out "${raw}.jpg" >/dev/null 2>&1 || return 1
    raw="${raw}.jpg"
    file "$raw" | grep -qi heif && { echo "STILL-HEIF: $oname"; return 1; }
  fi
  sips -Z 1600 -s formatOptions 75 "$raw" --out "$final" >/dev/null 2>&1 || return 1
  return 0
}

do_slug() { # $1=tag $2=slug
  local tag="$1"
  local slug="$2"
  local dest="$ROOT/$slug"
  mkdir -p "$dest"
  echo "== $tag -> $slug ==" | tee -a "$LOG"
  local i=0 ok=0
  python3 -c "
import json
d = json.load(open('/tmp/drive_ids.json'))
for n,f in sorted(d['$tag']):
    print(n+'\t'+f)
" | while IFS=$'\t' read -r name fid; do
    i=$((i+1))
    num=$(printf '%02d' $i)
    raw="/tmp/dl_raw_$tag"
    rm -f "$raw" "$raw.jpg"
    dl_one "$fid" "$raw"
    if process_one "$raw" "$dest/$num.jpg" "$name"; then
      ok=$((ok+1)); echo "  ok $num $name" | tee -a "$LOG"
    else
      echo "  FAIL $name $fid" | tee -a "$LOG"
    fi
    rm -f "$raw" "$raw.jpg"
    echo "$i $ok" > "/tmp/localize_$tag.progress"
  done
  echo "$tag done: $(ls "$dest"/*.jpg 2>/dev/null | wc -l) files" | tee -a "$LOG"
}

if [ "${1:-all}" = "all" ] || [ "${1:-all}" = "matrade" ]; then do_slug matrade matrade-celik-ai-2026-08; fi
if [ "${1:-all}" = "all" ] || [ "${1:-all}" = "jdn" ]; then do_slug jdn jdn-ai-evolution-posdigicert; fi
echo ALLDONE >> "$LOG"
