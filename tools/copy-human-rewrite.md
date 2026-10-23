# Copy for the human rewrite (words by the orchestrator, code by implementer)

## Instructions for the implementer (Codex Luna)

This file holds the final words for the site. Your job is code and design
only. Place the copy below word for word. Do not rewrite, shorten, merge or
"improve" any sentence. Do not add slogans, taglines or filler of your own.
If a sentence does not fit your layout, change the layout, not the sentence.
If some visible text has no replacement in this file, keep the current text
and list it in your final message so a human can decide.

Also read tools/brief-human-rewrite.md for design rules and for what must
stay unchanged (URLs, route names, Livewire classes, forms, photo names,
prices, dates, essay bodies). Where that brief told you to write copy, this
file replaces it. The design rules still stand: white background, DM Sans
only, no handwriting font, no tracked all-caps eyebrow labels, no fade-up
reveal animation, no photo-overlay closing bands, one blue accent, varied
sections. Remove every handwritten photo note ("Still curious..." and
similar). Remove the .cta background-photo sections and use the plain
closing sections below. Headings must not use forced line breaks to sound
poetic. Let headings wrap naturally.

Text in {braces} is dynamic, from the database or config. Keep it wired up.

---

## Global

Browser title (default): Saiffil Fariz

Meta description: Saiffil Fariz is a speaker, trainer and consultant based
in Shah Alam. He helps people and teams use AI for real work.

Open Graph description: Talks, training programmes and practical help on
using AI at work.

Header wordmark: Saiffil Fariz

Main navigation: About me · Work · Speaking · Writing
(These link to story, work, speaking, writing routes. Keep route names.)

"Work with me" menu:
- Invite me to speak | small text: Tell me the date, the room and the topic.
- Join a programme | small text: See dates, prices and seats left.
- Help for your team | small text: For teams putting AI into a real process.

Mobile menu button: Email me

Footer intro: I give talks, run training programmes and help teams use AI
in their everyday work. I live in Shah Alam, Malaysia.

Footer groups:
- Pages: About me, Work, Speaking, Where I have spoken, Writing
- Work with me: Invite me to speak, Join a programme, Help for your team
- Topics in my writing: the five topics from config by name

Footer bottom line: copyright, then the email address as a link. Nothing else.

Standard closing section (use on Home and Story, plain section, no photo):
- Heading: Get in touch
- Text: Planning a talk, a class or a project? Or you just have a question
  about using AI in your work? Send me an email. I read everything myself
  and I usually reply within two working days.
- Buttons: "Email me" (mailto) and "Invite me to speak" (speaking#book)

Facts strip: keep config/site.php facts as they are. They are already plain.

Proof line: change config proof value to:
"Lately I have spoken for MATRADE, two ministries and nine universities."
Show it as one normal sentence. No bold label above it.

---

## Home page

### Intro (with portrait photo)

Heading: Hi, I'm Saiffil Fariz.

Paragraph: I help people and teams in Malaysia use AI for real work. Most
of my time goes into three things. I give talks, I run small training
programmes, and I work with teams who want to use AI in a process they
already have.

Paragraph: I have worked with technology since 1996, so I have seen a few
waves come and go. This one is useful if you start with your own work, not
with the tools.

Buttons: "See the programmes" (programmes) and "About me" (story).
Below: the proof line above as a plain sentence.
Portrait alt text: Portrait of Saiffil Fariz

### What I do

Heading: What I do

Side paragraph: Most people come to me for one of these three. If you are
not sure which one fits, send me an email and tell me what you are trying
to get done. I will tell you honestly if I can help.

Card 1. Title: Speaking. Small text: 45 to 90 minutes.
Text: Talks and workshops for companies, agencies and universities. I
explain what AI can and cannot do, in plain language, and I show examples
from real work.
Link: See the talks

Card 2. Title: Programmes. Small text: 1 to 2 days.
Text: Small classes of up to 12 people in Kuala Lumpur. You bring a real
task from your job and you leave with it working, plus notes your
colleagues can follow.
Link: See dates and prices

Card 3. Title: Consulting. Small text: By arrangement.
Text: I sit with your team and help you put AI into one of your processes.
We start small, with one process, and only move on when the first one
works without me.
Link: How this works

(Keep the same three card photos as now.)

### Next programme

Small label: Next programme
Then the featured programme from config: name, summary, format, location,
seats, price, price note, dates. Button: Reserve a seat

### A bit about me (photo home-beach)

Heading: A bit about me

Paragraph: I live in Shah Alam with my wife and our two boys. A lot of how
I think about technology comes from home. If a tool saves me an hour, I
would rather spend that hour with my family than answer more email.

Paragraph: That is also how I teach. The point of using AI well is to get
the boring parts done faster, so you have time for the parts that need a
person.

Link: More about me

### Recent writing

Heading: Recent writing

Side paragraph: I write down what I learn from talks, classes and
projects. Most pieces are short and practical. Start with the newest one,
or browse by topic.

Link: All writing
(Featured post plus three latest from the database, as now.)

### Testimonial (keep the quote, plain presentation)

Quote: Clear, practical and immediately useful. Our team left with clarity
and a real plan, not a folder of slides.
Name: Aisyah Rahman. Detail: Business owner, Shah Alam

### Closing

Use the standard closing section above.

Drop the home page "five pillars" shelf section entirely. Topics live on
the writing page now.

---

## Story page (/story, nav label "About me")

Heading: About me

Intro: I first went online in 1996, on a dial-up modem in Shah Alam. The
connection was slow and the phone bill was not small, but I was hooked.
Almost thirty years later, my work is still about the same thing. I help
people use new technology without feeling lost.

Portrait alt text: Portrait of Saiffil Fariz
(Facts strip as now.)

### How I got here (photo story-1988-computer)

Heading: How I got here

Paragraph: As a kid I liked taking things apart to see how they worked.
Putting them back together took longer to learn. When the internet reached
Malaysia, I could see it would change how people work and do business. I
could also see that most people around me had no easy way in.

Paragraph: So I started there. First I built websites and systems. Then I
ran a small business and learned what owners actually worry about. Later I
began teaching in classrooms, workshops and boardrooms. These days most of
the teaching is about AI.

Paragraph: The tools keep changing. The job stays the same. Explain things
clearly, use real examples, and make sure people can do it themselves
after I leave.

### The short history (timeline)

Heading: The short history

- 1996 · First connection · Dial-up internet at home. Slow, noisy, and
  enough to change what I wanted to do with my life.
- 2004 · Building · Websites, servers and systems for clients. Work that
  had to keep running on Monday morning, not just look good in a demo.
- 2012 · Business · Running a small company of my own. I learned where
  money and time actually go in a small team.
- 2020 · Teaching · Weekly live sessions, workshops and guest lectures. A
  lot of it for people who had been told technology was not for them.
- Now · Talks, classes and projects · Keynotes, training programmes and
  project work with companies, agencies and universities in Malaysia and
  the region.

### Why I start with people (photo story-reflective-closing)

Heading: Why I start with people

Paragraph: Most technology projects I have seen go wrong did not fail
because of the software. They failed because nobody agreed on what done
looks like, nobody owned the work after launch, or the people who had to
use it were never asked.

Paragraph: That is why my first questions are always about the work, not
the tool. What are you trying to get done? Who does it now? What part of
it wastes their time? Once those answers are clear, choosing tools gets
much easier.

### Outside work

Heading: Outside work

Paragraph: Work is only part of my life. These are the other parts, in no
particular order.

Details list:
- Based in: Shah Alam, Malaysia
- Family: Married, with two boys. They think my job is mostly talking, and
  they are not far wrong.
- Reading: History, mostly. People change slower than technology does.
- Still true: I still take things apart to see how they work. I am better
  at putting them back together now.

Link: Read my writing

Drop the thesis quote section. End with the standard closing section.

---

## Work page (/work)

Heading: My work

Intro: I have spent thirty years building systems, running a business,
teaching and speaking. The work looks different every few years. The test
stays the same. Did anyone use it after I left?

(Facts strip as now. Head photo work-audience-closeup, same alt as now.)

### Five topics

Heading: Five topics my work covers

Side paragraph: I group my talks, classes and writing under five topics.
Most projects touch two or three of them at once. If you want to read
more, each topic links to the writing on it.

Rows: topic name, blurb from config, link "Read the writing" to the topic
page. Do not show numbers or the word pillars.

### How working with me goes

Heading: How working with me goes

Side paragraph: A one-hour talk and a two-month project follow the same
shape. You will always know what happens next and what it costs before we
start.

Steps:
1. Talk. We start with a short call about what you want to get done. No
   slides. If I am not the right person, I will say so on that call.
2. Agree. You get a one-page note with what we will do, who is involved,
   the price and the dates. Nothing is booked until you agree to it.
3. Do the work. The talk, the class or the project, built around your own
   material and your own people.
4. Hand over. You keep the notes, templates and files, written so your
   team can carry on without me.

### What success looks like (photo work-training-room)

Heading: What success looks like

Paragraph: I do not measure a session by how people feel when it ends. I
care about two weeks later. Is the report faster? Do people know how to
check what the AI gives them? Has the argument moved from whether to use
AI to how to use it well?

Paragraph: That is why everything ends with something written down and
owned by someone on your team.

### Start here

Heading: Start here

Side paragraph: Pick whichever is closest to what you need. We can always
change direction after the first call.

Cards: reuse the home page "What I do" three cards word for word, with the
same photos (work-large-audience, program-awakening, work-executive-workshop).

### Closing (work variant)

Heading: Get in touch

Text: Tell me what you are working on. A short call is usually enough to
know if I can help. If I cannot, I will try to point you to someone who
can.

Buttons: "Email me" (mailto) and "About me" (story).

---

## Speaking page (/speaking)

Heading: Speaking

Intro: I give talks and workshops about using AI at work. I skip the hype.
I explain what the tools can do today, what they still get wrong, and what
your people can try first. Every talk includes time for questions.

Buttons: "Check a date" (#book) and "See the talks" (#talks).
Head photo work-large-audience, same alt as now. No photo note.
(Facts strip as now.)

### Talks I give

Heading: Talks I give

Side paragraph: These four are the ones I am asked for most. Each one runs
as a 45-minute keynote or a longer workshop, and I adjust the examples for
your audience.

Rows (title, text, length, audience):
1. AI without the hype. What AI tools can do today, what they still cannot
   do, and how to tell the difference before you spend money. Your team
   leaves with a short list of things worth trying. · 45 to 75 minutes ·
   Mixed audiences
2. Using AI in everyday work. Five everyday jobs most teams can improve
   this quarter. Writing, research, meetings, reporting, and the handover
   notes nobody writes. I work live, on examples close to your own. · 60
   to 90 minutes · Teams
3. People first, tools second. Why many AI projects stall even when the
   software works. I cover the four questions that tell you early whether
   a project will stick. · 45 minutes · Leaders
4. Explaining hard things clearly. How to explain a complicated topic to
   busy people so they can act on it. Drawn from thirty years of teaching
   and plenty of mistakes. · 45 to 60 minutes · Communicators and trainers

Do not number the rows.

### Ways to book me

Heading: Ways to book me

Side paragraph: Most bookings are keynotes. Workshops work better when
people need to practise, not just listen.

Cards (title, length, text):
- Keynote · 45 to 90 minutes · One clear talk for your event, with
  examples chosen for your audience and time for questions.
- Workshop · Half day or full day · People work on their own tasks, on
  their own laptops. They leave with something started and notes to
  finish it.
- Panel · 30 to 60 minutes · I am happy to join a panel. I will say what I
  think, keep it friendly, and share the time.
- Guest lecture · 60 to 120 minutes · For universities and colleges.
  Practical sessions that connect the subject to first jobs and real
  workplaces.

### Where I have spoken (recent sessions from data, as now)

Heading: Where I have spoken

Side paragraph: Ministries, agencies, universities, companies, and once a
village ICT centre in Tanjong Sepat. The message changes with the room.
The honesty does not.

Links: "See all {total} sessions" (talks) and, if the series exists, "See
the weekly series I ran in 2020 and 2021" (series URL from data).

### How I prepare a talk (photo method-navigation-map)

Heading: How I prepare a talk

Paragraph: Before I write a single slide, I ask who will be in the room,
what they already think, and what decision they face next. Then I decide
what they should still remember a month later, and I build the talk around
that.

Paragraph: It takes longer than reusing an old slide deck. It is also why
people can repeat the main points weeks later when you ask them.

### Useful details

Heading: Useful details

Paragraph: The practical side, in one place. If your event runs
differently, tell me. Most of this is flexible, and I charge less for
schools, public institutions and non-profits.

Small text under it: Something else you need to know? Email me.
("Email me" is the mailto link.)

Details list:
- Based in: Shah Alam, Malaysia. I travel across Malaysia and the region.
- Lead time: Four to six weeks is comfortable. Ask anyway if your date is
  sooner. If I am free, I will do my best.
- Travel: Included within the Klang Valley. For other places I charge
  travel at cost, agreed with you in writing first.
- What I need: A microphone people can hear, an HDMI connection, and a
  screen the back row can read. I bring my own adapters and a backup copy
  of the slides.
- Languages: English and Bahasa Malaysia. Mixed audiences are fine.
- Recording: You may record the session for your own team. Please ask
  before publishing it anywhere public.

### Check a date (form section, id book)

Heading: Check a date

Paragraph: Tell me about your event. Who is coming, what they already
know, and what you want them to do differently afterwards. That is enough
for me to reply with a clear yes or no and a price.

Paragraph: You will hear back from me personally.

Small text: Prefer email? Write to {email}. (Email address is the link.)
Form: enquiry-form with intent speak, as now.

---

## Programmes page (/programmes)

Heading: Programmes

Intro: These are small, practical classes. You bring a real task from your
job. We work on it together, and you go home with it done or well started,
plus notes you can follow on your own.

Buttons: "Reserve a seat" (#reserve) and "See dates and prices" (#details).
Head photo program-awakening, same alt as now. No photo note.

Facts strip for this page:
- 12 · seats per class · so I can see everyone's work
- 2 · days at most · mostly hands-on
- 1 · real task finished · from your own job
- 0 · jargon · plain language throughout

### The three programmes

Heading: The three programmes

Side paragraph: Not sure which one fits? Start with AI Awakening. It
covers the basics the other two build on.

Programme blocks come from config (name, summary, format, location, dates,
seats, price, price note, photo). Do not show the kicker field. Keep the
chips for format, location, dates and seats.

Details under each programme:
- You leave with:
  - AI Awakening: One AI workflow that works on your own task, written
    down so a colleague can use it without you.
  - AI Brand Makeover 101: A simple brand kit. Your voice, your visuals
    and a repeatable brief your team can keep using.
  - For teams and leaders: One pilot project with a named owner and a
    clear way to tell if it worked.
- Who it is for:
  - AI Awakening and AI Brand Makeover 101: Individuals and small teams.
    You do not need a technical background.
  - For teams and leaders: Teams of 6 to 20 people, including the person
    who owns the result.
- What to bring (all three): A laptop, and one real task you keep putting
  off.

Buttons: "Reserve a seat" for the first two. For the team programme:
"Ask about a team booking". All link to #reserve.

### How every programme runs

Heading: How every programme runs

Side paragraph: The subject changes. The way I run the room does not.

Steps (these are a real sequence, numbers are fine here):
1. Your own work. Every exercise uses a task from your job. I only use
   sample files to show an example first.
2. Small classes. Twelve seats at most, so I can look at your screen and
   your questions, not just talk at the room.
3. Notes to keep. You get the notes, templates and prompts in writing, so
   you can repeat the work and share it.
4. A follow-up call. We meet again online about a month later, when you
   have tried things and real questions have come up.

### Questions people ask

Heading: Questions people ask

Paragraph: If your question is not here, email me. I would rather answer
it now than have you guess.

Link: Ask me a question (mailto)

Questions list:
- Do I need to know AI already? No. AI Awakening starts from the
  beginning. If you already use AI, you will still get feedback on your
  own task.
- What if I cannot make the dates? Tell me anyway. I set new dates based
  on the waiting list, and I will email you when the next class opens.
- Is it mostly lectures? No. About 70 percent of the time you are working.
  I explain what you need, then you try it.
- Can my company pay by invoice? Yes. Say so in the form and I will send
  an invoice instead of a payment link.
- What if I need to cancel? Full refund up to 14 days before the class.
  After that you can move to a later class or send a colleague in your
  place.

### Reserve a seat (form section, id reserve)

Heading: Reserve a seat

Paragraph: Tell me which programme you want and how many seats. I will
confirm that seats are free and send you the payment details. Nothing is
charged until you hear from me.

Small text: Prefer email? Write to {email}.
Form: enquiry-form with intent programme, as now.

### Programme summaries in config/site.php

Replace the three summary values with:
- ai-awakening: A two-day class for people who want to use AI in their own
  job. You will build one working workflow on your own task and learn how
  to check the results.
- brand-makeover: A one-day class for a small team. Bring your brand
  material and leave with a clear voice, visuals and templates you can
  reuse.
- teams-and-leaders: Training built around your team's actual work. We run
  it at your place or ours, and we use your documents and processes, not
  samples.
Change the third programme name to "For teams and leaders" (no ampersand).
Change nothing else in programmes config. Prices, dates, seats, formats,
locations, images and slugs stay exactly as they are.

---

## Consulting page (/consulting)

Heading: Consulting for teams

Intro: I help teams put AI into work they already do. Most projects I see
do not fail because the software is weak. They stall because nobody agreed
on what done means, or because the staff who must use it were never
involved. We fix those parts first.

Buttons: "Tell me about your project" (#talk) and "How engagements work"
(#shapes). Head photo work-executive-workshop, same alt as now.

### Where projects usually stall

Heading: Where projects usually stall

Side paragraph: I have seen these four patterns in well-run organisations.
None of them needs more software. Each one needs a clearer process and an
owner.

Cards:
- The pilot nobody uses. A team built something clever in a demo. Daily
  work never changed, and the licence still renews every year.
- The tool nobody opens. Software was given to 300 people. Nine use it.
  The training was one webinar.
- The policy came first. A ban was written before anyone understood the
  tools. Staff now use AI quietly on personal accounts, where nobody can
  see it.
- The plan with no owner. A strategy deck with a timeline and no names.
  Everyone agrees with it. Nothing happens.

Do not number the cards.

### How we work

Heading: How we work

Side paragraph: We do not start with a tool or a whole department. We pick
one process that is slow, repetitive and annoying, and we make that one
better.

Steps (real sequence, numbers fine):
1. Pick one process. For about two weeks I sit in, ask questions and watch
   how work really flows. We choose one process with a clear owner and a
   cost we can measure.
2. Test it small. We build a working version on your real data within
   weeks. If it does not save time, we stop and I will tell you why.
3. Hand it over. Your team gets the documentation, the prompts and the
   list of exceptions. The process runs without me.
4. Then the next one. Only when the first process is running well do we
   choose a second one.

### What good looks like (photo purpose-mountain)

Heading: What good looks like

Paragraph: Success is quiet. The monthly report that took four hours now
takes forty minutes, and nobody finds that exciting anymore. It is just
how work gets done.

Paragraph: That is the aim. Your team owns the improvement, and you stop
needing me.

### Ways to work together (id shapes)

Heading: Ways to work together

Side paragraph: Most teams start with the sprint. Some stop there, and
that is fine.

Rows (name, text, price, length). Do not number the rows:
- The sprint. Two to four weeks to test one process. You get a working
  prototype and a written recommendation. Sometimes the honest answer is
  do not proceed, and I will say so. · From RM 18,000 · 2 to 4 weeks
- Monthly advice. A regular session with the team doing the work. You get
  a second opinion before you spend the budget, not after. · From
  RM 4,500 per month · 3 to 12 months
- The build. When something needs to be built and nobody inside can build
  it. I scope it like software, deliver it, and hand over the source code.
  · Quoted per project · 6 to 16 weeks

Note under the rows: Schools, public institutions and non-profits pay
less. Ask me and I will quote for your situation.

### Tell me about your project (form section, id talk)

Heading: Tell me about your project

Paragraph: Describe the process you want to fix, in plain words. If I am
not the right person, I will tell you on the first call and suggest
someone better.

Small text: Prefer email? Write to {email}.
Form: enquiry-form with intent consult, as now.

---

## Writing page (/writing)

Heading: Writing

Intro: Short pieces from my talks, classes and projects. Most are
practical. Some are just me thinking in public. Browse everything, or
filter by topic.

Filter row labels: Topic · Format · Written for. Keep the chips and URLs
working as now. The audience default chip stays "Everyone".

Count line: keep the dynamic counts as now ("X of Y pieces" when filtered,
"Y pieces, newest first" otherwise). Clear filters link stays.

Empty result:
- Heading: Nothing here yet.
- Text: Try a different topic, or see everything. ("see everything" links
  to the writing page with no filters.)

Bottom section:
- Heading: Browse by topic
- Five topic cards from config: photo, name, one-line description (the
  config line value below). No numbers, no word shelf.

## Topic page (/pillars/{slug}, keep the URL)

Back link: Writing

Heading: the topic name on its own, no trailing full stop, no "Shelf X
of 5" label, no photo note. Keep the topic photo.
Intro: the topic blurb from config (new values below).
Small text: {n} pieces on this topic. (Use correct plural.)

Empty result:
- Heading: Nothing here yet.
- Text: I have not published anything on this topic yet. Browse everything
  in the meantime. ("Browse everything" links to writing.)

Bottom section:
- Heading: Other topics
- Paragraph: My writing sits under five topics. Read them in any order.
- Cards for the other four topics: photo, name, line.

### Topic text in config/site.php (replace line and blurb, keep slug, name, image)

- Code. Line: Building software that solves real problems.
  Blurb: Thirty years of building software and keeping it running. What
  works, what breaks, and what I would do differently.
- Commerce. Line: Running and growing a small business.
  Blurb: Lessons from building businesses in Malaysia. Pricing, customers,
  and the unglamorous work that keeps a small company alive.
- Influence. Line: Talks and teaching that people can use.
  Blurb: Notes from keynotes and workshops. How to explain AI and
  technology so a busy room leaves with a next step.
- Education. Line: Teaching technology in plain language.
  Blurb: How I teach AI to people who do not think of themselves as
  technical. Methods, mistakes and what actually sticks.
- Character. Line: Doing good work, honestly.
  Blurb: The human side of the work. Focus, family, patience, and why the
  point of saving time is what you do with it.

Also update the comments in config/site.php and routes/web.php that talk
about pillars, shelves, the library or doors. Short neutral comments are
fine. Do not change any route, slug or value other than the text above.

## Article page (/writing/{slug})

Back link: Writing
Title, summary (dek), topic chip, format, reading time and date stay as
now. They come from the database.
The row after the article body currently starts with the label "Filed
under". Change the label to: Topic

Related section heading: More to read

Closing section (plain, no photo band):
- Heading: Want a session like this for your team?
- Text: I give talks and run classes on topics like this one. Tell me what
  your team needs and I will suggest a format.
- Buttons: "Invite me to speak" (speaking#book) and "See the programmes"
  (programmes).

Do not change article bodies, titles or deks in the database or seeder.

## Talks page (/talks)

Heading: Where I have spoken

Intro: I have spoken for ministries, agencies, universities, companies and
community groups. This page lists {total} sessions. The ones with photos
have their own page.

(Photo cards as now.)

Series section (weekly series from data):
- Heading: The weekly series, 2020 to 2021
- Text: Before the AI talks, I ran a weekly live series called
  {series name} from July 2020 to August 2021. The topics were sales,
  follow-up and running a small business. We kept the announcement
  posters, and they are all here.
- Button: See all {count} posters

More sessions section:
- Heading: More sessions
- Side paragraph: These sessions have no photo page. Sometimes the
  organiser asked for no photography. Sometimes the session was online or
  on air.
- Rows as now (title, summary, organisation, type, date, venue). Do not
  number the rows.

Closing section (plain, no photo band):
- Heading: Planning a session?
- Text: Tell me who will be in the room and what you want them to take
  away. I will reply with whether I am the right fit.
- Buttons: "Invite me to speak" (speaking#book) and "See the talks I give"
  (speaking).

## Talk detail page (/talks/{slug})

Back link: Where I have spoken
Title, summary, organisation and venue come from data. Keep them.
Keep the details list (When, Where, Who, Language, Organisation).

"What we covered" stays as the heading for outcomes and modules. Keep the
outcome text from data as it is.

Photos section:
- Heading: Photos from the session
- Small text: All the photos, in the order they were taken. Click a photo
  to see it larger.

Letter section heading: Letter from the organiser
Keep the letter details and the PDF button ("Read the letter (PDF)").

Previous and next links stay. Where there is no previous session, the link
text is: All sessions

## Series page (/talks/series/{slug})

Back link: Where I have spoken
Heading: the series name from data, no trailing full stop.

The intro, summary and "why" paragraphs come from assets/data/series.json.
Update only these text fields in that JSON file, keep the structure and
every other value (slug, dates, org, episodes) untouched:
- kicker: (the template will no longer show kickers anywhere, leave the
  value in JSON, just do not display it)
- lede: From July 2020 to August 2021 I ran a weekly live session on Zoom,
  at nine at night, in Bahasa Malaysia and Bahasa Indonesia. Each session
  had an announcement poster. Forty-six posters survived, and they are
  collected here.
- summary: A weekly live session for entrepreneurs, small business owners
  and sales agents. We covered sales, follow-up, closing and mindset. The
  basics of running something small, one topic a week.
- why[0]: Most people meet me through my AI talks. This series is where I
  learned to teach, a few years before that.
- why[1]: For over a year I explained how to make the second phone call,
  how to follow up without sounding desperate, and how to keep going when
  sales are slow. The audience was small business owners and agents. They
  asked direct questions and expected answers they could use the next
  morning.
- format: Live on Zoom. 8pm to 10pm in 2020, 9pm on Saturdays in 2021.

Facts strip labels on this page:
- {count} · posters · one poster per session
- {months} · months · {date range from data}
- 2 · languages · Bahasa Malaysia and Bahasa Indonesia
- {theme count} · topics · the basics of small business

Why section:
- Heading: Why I keep these posters
- The two why paragraphs from data (new values above).
- Note line under them: None of these sessions was about AI. That came
  later.
- Side: summary from data, then the details list (Format, Language,
  Audience, Run by) with values from data. Change the "In the room" label
  to: Audience

Poster wall:
- Heading: All the posters
- Filters (Year, Theme) and counts work as now.
- Empty result: No posters match that filter. Clear the filters to see
  them all. ("Clear the filters" links to the unfiltered page.)

Closing section:
- Heading: About the posters
- Text: The posters are shown as they were posted, typos and all.
  Cleaning them up now would not be honest.
- Buttons: "See where I speak now" (talks) and "Invite me to speak"
  (speaking#book).

Keep the poster viewer dialog working.

## Enquiry form (all pages)

Keep every field, wire model and validation exactly as now. Only these
words change:
- Form accessible labels stay as now.
- Message field labels:
  - programme: Which programme, and how many seats?
  - consult: What process do you want to fix?
  - speak: Tell me about your event
- Submit button: Send
- While sending: Sending...
- Text next to the button: I usually reply within two working days.
- Note under the form: I only use this to reply to you. No mailing list,
  no sharing.
- Success heading: Thanks, your message is in.
- Success text: I read these myself. Expect a reply from me within two
  working days.
- Success small text: In a hurry? Email {email}. (Email address is the
  link.)
- Date field placeholder stays: A month, or a specific date

## Cards

Post card: keep title, summary, topic and format chips, reading time and
audience. Link text stays: Read
Talk card: keep organisation, title, summary, type and date chips. Footer
count text: {n} photos. Link text: See the session

## When you finish (implementer checklist)

1. No visible text on any page uses these words for site structure:
   pillar, pillars, shelf, shelves, library, doors. The URL /pillars/
   stays, the word does not appear on screen.
2. No em dashes in new visible copy. No curly quotes in new visible copy.
   (Database article bodies are exempt. Leave them alone.)
3. Programme prices, dates, seats, consulting prices, email, city and the
   four facts are unchanged. Article bodies unchanged.
4. Run npm run build, php artisan test, and curl checks for /, /story,
   /work, /speaking, /programmes, /consulting, /writing, /talks, one
   article and one talk page. Fix what you broke. If a test checks old
   wording, update it to the copy in this file and say which test.
5. Final message: list changed files, list any visible text you kept
   because this file gave no replacement, and confirm the checks passed.
   Do not quote new marketing lines of your own. There should be none.
