<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Experience across five disciplines</p>
                <h1>My work</h1>
                <p class="lede">I have spent thirty years building systems, running a business, teaching and speaking. The work looks different every few years. The test stays the same. Did anyone use it after I left?</p>
            </div>
            <div class="phero__media">
                <x-photo name="work-audience-closeup" alt="A participant listening closely during a session"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" />
            </div>
        </div>
    </section>

    <section class="strip">
        <div class="wrap strip__grid">
            @foreach (config('site.facts') as $fact)
                <div>
                    <b>{{ $fact['value'] }}</b>
                    <span>{{ $fact['label'] }}</span>
                    <small>{{ $fact['note'] }}</small>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="head">
                <h2>Five topics my work covers</h2>
                <p class="body">I group my talks, classes and writing under five topics. Most projects touch two or three of them at once. If you want to read more, each topic links to the writing on it.</p>
            </div>
            <div class="rows">
                @foreach (config('site.pillars') as $topic)
                    <div class="rows__item">
                        <div>
                            <h3>{{ $topic['name'] }}</h3>
                            <p>{{ $topic['blurb'] }}</p>
                        </div>
                        <div class="rows__meta">
                            <b>{{ $topic['line'] }}</b>
                            <a class="link" href="{{ route('pillar', $topic['slug']) }}">Read the writing</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>How working with me goes</h2>
                <p class="body">A one-hour talk and a two-month project follow the same shape. You will always know what happens next and what it costs before we start.</p>
            </div>
            <div class="steps">
                @foreach ([
                    ['Talk', 'We start with a short call about what you want to get done. No slides. If I am not the right person, I will say so on that call.'],
                    ['Agree', 'You get a one-page note with what we will do, who is involved, the price and the dates. Nothing is booked until you agree to it.'],
                    ['Do the work', 'The talk, the class or the project, built around your own material and your own people.'],
                    ['Hand over', 'You keep the notes, templates and files, written so your team can carry on without me.'],
                ] as $index => $step)
                    <div class="steps__item">
                        <b>{{ $index + 1 }}</b>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="band">
        <div class="band__media">
            <x-photo name="work-training-room" alt="A training room mid-workshop"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy">
            <h2>What success looks like</h2>
            <p class="body">I do not measure a session by how people feel when it ends. I care about two weeks later. Is the report faster? Do people know how to check what the AI gives them? Has the argument moved from whether to use AI to how to use it well?</p>
            <p class="body">That is why everything ends with something written down and owned by someone on your team.</p>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="head">
                <h2>Start here</h2>
                <p class="body">Pick whichever is closest to what you need. We can always change direction after the first call.</p>
            </div>
            <div class="grid grid--3">
                @foreach ([
                    ['title' => 'Speaking', 'image' => 'work-large-audience', 'alt' => 'Saiffil speaking to a large audience', 'body' => 'Talks and workshops for companies, agencies and universities. I explain what AI can and cannot do, in plain language, and I show examples from real work.', 'href' => route('speaking'), 'cta' => 'See the talks', 'meta' => '45 to 90 minutes.'],
                    ['title' => 'Programmes', 'image' => 'editorial-learning-practice-v1', 'alt' => 'Learners working through a practical exercise together', 'body' => 'Small classes of up to 12 people in Kuala Lumpur. You bring a real task from your job and you leave with it working, plus notes your colleagues can follow.', 'href' => route('programmes'), 'cta' => 'See dates and prices', 'meta' => '1 to 2 days.'],
                    ['title' => 'Consulting', 'image' => 'work-executive-workshop', 'alt' => 'A workshop around a boardroom table', 'body' => 'I sit with your team and help you put AI into one of your processes. We start small, with one process, and only move on when the first one works without me.', 'href' => route('consulting'), 'cta' => 'How this works', 'meta' => 'By arrangement.'],
                ] as $service)
                    <article class="card">
                        <div class="card__media">
                            <x-photo :name="$service['image']" :alt="$service['alt']"
                                     sizes="(max-width: 620px) 100vw, (max-width: 900px) 50vw, 33vw" />
                        </div>
                        <div class="card__body">
                            <p class="small">{{ $service['meta'] }}</p>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['body'] }}</p>
                            <div class="card__foot">
                                <a class="link" href="{{ $service['href'] }}">{{ $service['cta'] }}</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="wrap cta__inner">
            <h2>Get in touch</h2>
            <p class="lede">Tell me what you are working on. A short call is usually enough to know if I can help. If I cannot, I will try to point you to someone who can.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('story') }}">About me</a>
            </div>
        </div>
    </section>
</div>
