# assets/img/engagements/<slug>/ — local photo archive

Every session's photos live HERE, on the site. No Drive links anywhere in the UI.

```
assets/img/engagements/matrade-celik-ai-2026-08/
  cover.jpg     ← hero/cover (1600px, pick the strongest Saiffil-in-action frame)
  01.jpg … NN.jpg   ← full set, numbered in shoot order
  photos.json   ← manifest ["cover.jpg","01.jpg",...] — generated, do not hand-edit
```

Detail page (`engagement.html?slug=xxx`) renders the full manifest, lazy-loaded.
Listing cards use `cover.jpg`. Track-record table needs no photos.

## Adding a new session
1. Add entry in `assets/data/engagements.json` (slug, title, org, dates…).
2. Drop processed photos (1600px max, q75 JPG) as `01.jpg…` + `cover.jpg`.
3. Regenerate manifest: `cd <slug> && ls *.jpg | python3 -c "import json,sys; print(json.dumps({'photos':sorted(sys.stdin.read().split())}))" > photos.json`
4. For bulk Drive imports: `tools/localize-photos.sh` (reads /tmp/drive_ids.json).

## Cover rule
Saiffil visible + audience in frame + context readable (screen/banner).
Swap anytime: overwrite `cover.jpg`, keep it first in `photos.json`.
