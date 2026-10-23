# Brief: make saiffilfariz.com sound and look like a person wrote it

## The job

Rewrite the words and restyle the pages of this Laravel site so it reads like
Saiffil Fariz talking to a visitor, one person to another. Right now the site
is polished and hard to follow. Too many slogans, too much poetry, too much
effort to sound impressive. A visitor should understand in ten seconds who
Saiffil is, what he does, and how to reach him. Everything on the site should
help with that and nothing else.

You may rewrite pages from scratch where that is easier. Keep the facts.
Change every sentence that sounds written to impress.

## Who Saiffil is (use these facts, do not invent new ones)

- Saiffil Fariz, based in Shah Alam, Malaysia. Works across Malaysia and the
  region.
- 30 years working with technology, since 1996.
- 100+ talks and workshops. 300+ organisations. 9 universities.
- Recently in the room with MATRADE, two ministries and nine universities.
- Married, two boys. Email: hello@saiffilfariz.com.
- What he sells: talks and workshops (45 to 90 minutes), small training
  programmes where people build something real (one or two days, 12 seats),
  and hands-on help for teams putting AI into a real process.
- Programme prices and dates live in config/site.php. Do not change them.

## How to write

Write the way a clear person talks. Short sentences. One idea per sentence.
Use "I" and "you". Say what happens, not how it feels.

Rules:

- No slogans. If a sentence could go on any other person's website unchanged,
  delete it. It says nothing about Saiffil.
- No em dashes. Use a period or a comma. Also no en dashes as separators.
- No "not just X, but Y" constructions. State the point.
- Do not force things into groups of three. Use the natural number.
- Plain words. "Use" not "utilize" or "leverage". "Help" not "facilitate".
  Avoid: delve, crucial, pivotal, vibrant, showcase, landscape, tapestry,
  testament, underscore, elevate, empower, unlock, journey, embrace,
  transform (as a hype word), north star, flywheel.
- Say "is" and "has". Avoid "serves as", "stands as", "boasts", "features".
- No vague claims. Replace feelings with facts and numbers. "You leave with
  one working workflow" is good. "A more capable you" is not.
- No metaphors for the site structure. The current site calls topics
  "pillars", "shelves", "the library", "doors". Drop all of that in anything
  the visitor sees. Call them topics, or just show the writing.
- Headings in sentence case. Headings say what the section is. They do not
  need to be clever. "What I do", "Talks I give", "Recent writing",
  "Get in touch" are good headings.
- Straight quotes.
- Cut adverbs. If a verb needs "really" or "significantly", pick a verb that
  does not.
- Every page ends with one clear next step: read something, book a seat, or
  send an email. Say it plainly.

Banned phrases (currently on the site, all must go):

- "A more capable you, for a bigger tomorrow"
- "Let's create a brighter tomorrow"
- "A better tomorrow starts at home"
- "Ideas are better when shared"
- "Still curious. Still building." and all similar handwritten photo notes
- "Everything I do, filed five ways"
- "Five shelves", "The five pillars", "The library", "Everything, filed"
- "Notes from the work" as a poetic stand-in for "Writing" (the page heading
  can just be "Writing")
- "It started with a dial tone", "A kid, a modem, and a very slow connection"
  (the story is fine, tell it plainly)
- "Fewer slides. More Monday.", "I ask first. Then I write.",
  "Learn it by doing it.", "What I'll say to your room.",
  "The problem isn't the tool." as a headline,
  "Technology is the easy part.", "Different chapters. Same direction."
- Any headline that needs a line break in the middle to sound like poetry.

Good tone example (aim for this):

"Hi, I'm Saiffil. I help people and teams in Malaysia use AI for real work.
I give talks, run small training programmes, and work with teams who want to
put AI into a process without breaking it. I have been working with
technology since 1996."

## How it should look

The current design tries hard to look literary. Make it calm, plain and easy
to scan. Edit resources/css/site.css (rewrite it if simpler). Keep the
self-hosted fonts in resources/css/fonts.css, but:

- Use DM Sans for headings and body. Drop Playfair Display for headings and
  drop the Caveat handwriting entirely (brand, photo notes). The wordmark is
  just "Saiffil Fariz" in DM Sans.
- Background: white. The current whole-page cream (#FBF8F2) goes. A very light
  neutral gray is fine for one or two alternate sections, not everywhere.
- Keep one accent colour, the existing blue (#0F62A8) is fine. Use it for
  links and the main button only. No gradients. No glow. No purple.
- Remove the tracked all-caps eyebrow label above every section. At most a
  small plain label where it genuinely helps, in sentence case.
- Vary the sections. Do not repeat label, big heading, three cards on every
  page. Use plain lists, definition-style rows, and text with a photo where
  they fit. Cards only where they help (programmes, writing, talks).
- Remove the fade-up reveal animation on scroll. Content is just there.
  Keep the sticky header, mobile menu, dropdown and lightbox working.
- Body text stays dark and readable (near-black, not mid-gray). Clear size
  hierarchy: page title, section title, body.
- Keep it fast and accessible: focus styles, skip link, alt text,
  prefers-reduced-motion respected, good tap targets.

## Pages

Keep all current URLs and route names. Keep Livewire components, the enquiry
forms, the photo component and photo names, and the engagements data working.
Rewrite the visible copy on:

- resources/views/layouts/app.blade.php (title and meta description: plain,
  e.g. title "Saiffil Fariz" and a one-sentence description of what he does)
- resources/views/components/site-header.blade.php and site-footer.blade.php
  (plain labels; footer groups can be "Pages", "Work with me", "Topics")
- resources/views/livewire/home-page.blade.php
- resources/views/livewire/story-page.blade.php
- resources/views/livewire/work-page.blade.php
- resources/views/livewire/speaking-page.blade.php
- resources/views/livewire/programmes-page.blade.php
- resources/views/livewire/consulting-page.blade.php
- resources/views/livewire/writing-page.blade.php (rename "The library" to
  "Writing", filter label "Shelf" to "Topic")
- resources/views/livewire/pillar-page.blade.php, article-page.blade.php,
  talks-page.blade.php, talk-page.blade.php, series-page.blade.php
  (plain headings; "shelf" wording out)
- resources/views/livewire/enquiry-form.blade.php (check labels are plain)
- config/site.php (rewrite pillar names' taglines and blurbs in plain words.
  Keep slugs, images, programme prices, dates, seats and contact unchanged.
  The five topic names Code, Commerce, Influence, Education, Character can
  stay, they are plain enough. Just fix their one-liners and blurbs.)
- routes/web.php comments only if they mention doors or shelves. Do not
  change any route.

Home page structure (keep it close to this):

1. Short intro with photo: who I am, what I do, where I am based. Two
   buttons: "Work with me" (programmes or speaking) and "About me" (story).
   One plain line of proof underneath.
2. What I do: three plain entries, Speaking, Programmes, Consulting. Each
   says what it is, who it is for, and how long it takes.
3. Next programme: keep the featured programme card with date, place, price.
4. A bit about me: short personal paragraph with the family photo. Plain,
   not a manifesto. Link to the story page.
5. Recent writing: featured post plus three latest. Keep using the database.
6. One testimonial, kept simple.
7. Get in touch: short closing section with email button and "Invite me to
   speak". No background-photo drama needed.

Other pages: keep their useful content (talk list, formats, logistics,
programme details, FAQ, consulting steps, story timeline, facts strip) and
rewrite headings and paragraphs in the plain voice above. Shorter is better.
If a section exists only for atmosphere, cut it.

## Do not change

- Essay bodies in database/seeders/PostSeeder.php. They already sound human.
  You may fix a title or dek only if it is flowery. Do not rewrite bodies.
- Prices, dates, seat counts, email, city, and the four facts.
- Photo file names used by the photo component.
- Livewire component class names, route names, form fields and validation.
- Do not add packages, npm or composer. Do not add new pages or features.

## Before you finish

1. Run `npm run build` and fix any error.
2. Run `php artisan test` and fix any failure you caused. If a test asserts
   old wording, update the test to the new plain wording and say so.
3. Run `php artisan view:clear` then start `php artisan serve` briefly and
   check /, /story, /speaking, /programmes, /consulting, /writing and one
   article return 200 with curl.
4. Re-read every page you changed out loud in your head. If a sentence sounds
   like marketing, rewrite it until it sounds like a person.
5. In your final message, list the files you changed and quote the new home
   page intro word for word so it can be checked.
