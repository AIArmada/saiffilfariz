# assets/img/engagements/<slug>/ — source photo archive

Full-size originals for every session. Nothing here is served directly; the site
reads generated derivatives from `public/assets/img/`.

```
assets/img/engagements/matrade-celik-ai-2026-08/
  cover.jpg         ← the card/hero frame (Saiffil visible + audience + context)
  01.jpg … NN.jpg   ← the full set, numbered in shoot order
```

## How it renders

- `/talks` — track record. Entries with photos get a card; `listed_only` entries
  appear as rows with no photo.
- `/talks/{slug}` — cover, facts, outcomes, a 12-photo gallery with a lightbox,
  and any letter of appreciation.
- `/speaking` — the two most recent photo-backed sessions, linking to `/talks`.

## Adding a talk

1. Drop the originals into `assets/img/engagements/<slug>/` as `cover.jpg` + `01.jpg…`.
2. Add an entry to `assets/data/engagements.json`.
   **Every photograph in the folder is published** — these sessions were large,
   and curating down to a dozen hides the volume.
3. Generate web derivatives:

   ```
   python3 tools/optimise-engagements.py <slug>
   ```

   This writes the cover into `public/assets/img/opt/` (joining the global
   `<x-photo>` manifest as `talk-<slug>`) and the gallery into
   `public/assets/img/engagements/<slug>/`, plus a per-slug `manifest.json`.
   It is idempotent — only files whose source changed are rebuilt.

   A frame byte-identical to `cover.jpg` is skipped, so the hero never appears
   twice on one page.

**To curate instead**, set `"gallery": ["01","12",…]` on the entry — the list
replaces the automatic one entirely, and the order you write is the order
published.

Photos without a page: set `"listed_only": true` and skip steps 1–3.

## Letters and documents

Proof documents (letters of appreciation, certificates) go in `public/assets/docs/`
and are referenced from the JSON:

```json
"letter": {
  "label": "Letter of appreciation",
  "date": "2026-09-30",
  "ref": "MATRADE. 500-6/2/45 (7)",
  "signatory": "…",
  "file": "assets/docs/matrade-surat-penghargaan-2026-09-30.pdf"
}
```

The first page is rendered automatically as a thumbnail by the optimiser
(registered as `talk-<slug>-letter`), so the detail page shows a document card
with a link to the PDF.

## Cover rule

Saiffil visible + audience in frame + context readable (screen, banner, or wall).
Overwrite `cover.jpg` and re-run the optimiser to swap it.

---

# Series posters — `talk-with-ceo-series/`

A *series* is a long run of sessions that would swamp the engagement list: one
row each would be noise, but the whole run is the evidence. Currently one
series — Talk With CEO, 46 weekly live sessions, July 2020 to August 2021.

Posters are announcement graphics, not photographs. They are square, they carry
their own typography, and cropping them destroys the point — so they get their
own pipeline, their own width ladder, and a 1:1 tile that does not crop.

```
assets/img/engagements/talk-with-ceo-series/
  01.jpg … 46.jpg   ← one poster per episode, numbered as supplied
```

## How it renders

- `/talks/series/talk-with-ceo` — the wall: every poster, grouped by year,
  filterable by year and theme with plain URLs (`?year=2021&theme=sales`).
  Clicking a poster opens it full size with its title and date.
- `/talks` — a six-poster doorway into the wall, under the engagement cards.
- `/speaking` — a text link next to "All N engagements".

## **Never present a count as a total number of sessions.** A poster that did not survive
means a session we know nothing about — the copy on the site says "the ones we still
have" on purpose, and a number should always be labelled *posters*, not *sessions*.

Adding a poster

1. Drop the image into `talk-with-ceo-series/` as `<NN>.jpg`.
2. Add a row to `assets/data/series.json` → `series[0].episodes`:

   ```json
   { "poster": "47", "date": "2021-09-01", "theme": "sales",
     "title": "Exactly as printed on the poster",
     "en": "English gloss — omit if the title is already English" }
   ```

   `theme` must be one of the keys in the top-level `themes` map. Titles are
   transcribed as printed; do not tidy the poster's own spelling.
3. Generate derivatives:

   ```
   python3 tools/optimise-series.py talk-with-ceo
   ```

   This writes `public/assets/img/series/talk-with-ceo/<NN>-{420,700,1080}.webp`
   plus a `manifest.json`. Idempotent, like the engagement optimiser.

## Adding a whole new series

Add an object to `series[]` with its own `slug`, `name`, `poster_dir` and
`episodes`. The route, wall, filters and lightbox all follow automatically —
nothing in the application needs to change. Only the hardcoded links on
`/talks` and `/speaking` assume the first series.

