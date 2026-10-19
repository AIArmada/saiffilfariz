# Image Replacement Guide — SAIFFIL reel

Every visual is a `.ph` frame with a temp photo from picsum + a label.
Replace `src` with real files in `site/assets/img/`. Keep filenames below.

## Required shots (priority order)
1. `hero-portrait.jpg` 2000×1200 — Saiffil, low-key, terminal glow, KL night. NOT stock. Direct gaze.
2. `teaching-room.jpg` 900×1100 — live demo, mixed audience, aha moment.
3. `reel1-whizkid.jpg` — 80s warmth, kid + old computer (or recreation).
4. `reel2-terminal.jpg` — CRT / terminal / dorm desk night.
5. `reel3-server.jpg` — home server, cables, fan glow.
6. `reel4-aircraft.jpg` — AirAsia CellMaxx livery wide (secure rights).
7. `reel4-crowd.jpg` — Maxxima hall / payouts / LTdL 2017.
8. `reel5-present.jpg` 900×1100 — present-day calm portrait.
9. `proof-*` — campaign artefacts, screenshots, posters, studio.
10. `human-*` — builder hands, father+kids (consent!), quiet seeker.
11. `connect-invite.jpg` — doorway / warm light, invitation.
12. `finale-wide.jpg` — wide dusk, negative space for type.

## Rules
- Grayscale-ish grade is applied in CSS; shoot in colour, site grades it.
- No: glowing brains, robots, handshakes, fake dashboards.
- Yes: real rooms, real hands, real crowds, paper, screens, tarmac.
- Keep picsum URL as fallback until real file lands — just swap `src`.

## Run
No build. Open `site/index.html` or serve:
```
cd site && python3 -m http.server 8080
```
