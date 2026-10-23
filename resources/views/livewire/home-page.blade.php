<div>
    <section class="hero hero--connected">
        <picture class="hero__visual" aria-hidden="true">
            <source media="(max-width: 720px)"
                    srcset="{{ asset('assets/img/generated/home-hero-connected-intelligence-phone.jpg') }}"
                    width="1122" height="1402">
            <source media="(max-width: 1100px)"
                    srcset="{{ asset('assets/img/generated/home-hero-connected-intelligence-tablet.jpg') }}"
                    width="1448" height="1086">
            <img class="hero__art" src="{{ asset('assets/img/generated/home-hero-connected-intelligence.webp') }}"
                 alt="" width="1672" height="941" fetchpriority="high">
        </picture>
        <div class="wrap hero__inner">
            <div class="hero__copy">
                <p class="hero__eyebrow">Connected intelligence <span>AI · Business · People</span></p>
                <h1>Outthink.<br>Outcreate.<br><em>Outlead.</em></h1>
                <p class="lede">
                    I connect AI, business and people to make work more meaningful—and make room for what only people can do.
                </p>
                <div class="hero__actions">
                    <a class="btn hero__primary" href="{{ route('programmes') }}">Explore the programmes <span aria-hidden="true">↗</span></a>
                    <a class="btn hero__secondary" href="{{ route('story') }}">My story</a>
                </div>
                <p class="hero__proof">{{ config('site.proof') }}</p>
            </div>
        </div>
    </section>

    <div class="wrap connection-rail">
        <p class="connection-rail__intro">Five worlds. One perspective.</p>
        <nav class="connection-rail__links" aria-label="Explore the five disciplines">
            @foreach (config('site.pillars') as $pillar)
                <a href="{{ route('pillar', $pillar['slug']) }}">{{ $pillar['name'] }}</a>
            @endforeach
        </nav>
    </div>

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
                <div>
                    <h2>What I do</h2>
                </div>
                <p class="body">
                    Most people come to me for one of these three. If you are not sure which one fits, send me an email and tell me what you are trying to get done. I will tell you honestly if I can help.
                </p>
            </div>

            <div class="service-list">
                @foreach ([
                    ['title' => 'Speaking', 'image' => 'work-large-audience', 'alt' => 'Saiffil speaking to a large audience', 'body' => 'Talks and workshops for companies, agencies and universities. I explain what AI can and cannot do, in plain language, and I show examples from real work.', 'href' => route('speaking'), 'cta' => 'See the talks', 'meta' => '45 to 90 minutes.'],
                    ['title' => 'Programmes', 'image' => 'editorial-learning-practice-v1', 'alt' => 'Learners working through a practical exercise together', 'body' => 'Small classes of up to 12 people in Kuala Lumpur. You bring a real task from your job and you leave with it working, plus notes your colleagues can follow.', 'href' => route('programmes'), 'cta' => 'See dates and prices', 'meta' => '1 to 2 days.'],
                    ['title' => 'Consulting', 'image' => 'work-executive-workshop', 'alt' => 'A workshop in progress around a boardroom table', 'body' => 'I sit with your team and help you put AI into one of your processes. We start small, with one process, and only move on when the first one works without me.', 'href' => route('consulting'), 'cta' => 'How this works', 'meta' => 'By arrangement.'],
                ] as $service)
                    <article class="service-row">
                        <div class="service-row__media">
                            <x-photo :name="$service['image']" :alt="$service['alt']"
                                     sizes="(max-width: 720px) 100vw, 44vw" />
                        </div>
                        <div class="service-row__copy">
                            <p class="small">{{ $service['meta'] }}</p>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['body'] }}</p>
                            <a class="link" href="{{ $service['href'] }}">{{ $service['cta'] }}</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--tight section--muted">
        <div class="wrap">
            @php($featuredProgramme = collect(config('site.programmes'))->firstWhere('featured', true))
            <article class="card card--feature">
                <div class="card__media">
                    <x-photo :name="$featuredProgramme['image']" :alt="$featuredProgramme['name']"
                             sizes="(max-width: 900px) 100vw, 50vw" />
                </div>
                <div class="card__body">
                    <p class="small">Next programme</p>
                    <h3>{{ $featuredProgramme['name'] }}</h3>
                    <p>{{ $featuredProgramme['summary'] }}</p>
                    <div class="tag-row">
                        <span class="chip chip--accent">{{ $featuredProgramme['format'] }}</span>
                        <span class="chip">{{ $featuredProgramme['location'] }}</span>
                        <span class="chip">{{ $featuredProgramme['seats'] }}</span>
                    </div>
                    <p class="prog__price">
                        {{ $featuredProgramme['price'] }}
                        <span>{{ $featuredProgramme['price_note'] }}</span>
                    </p>
                    <p class="caption">{{ $featuredProgramme['dates'] }}</p>
                    <div class="card__foot">
                        <a class="btn btn--primary" href="{{ route('programmes') }}">Reserve a seat</a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="band">
        <div class="band__media">
            <x-photo name="home-beach" alt="Two boys running through the sea at sunset"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy">
            <h2>A bit about me</h2>
            <p class="body">
                I live in Shah Alam with my wife and our two boys. A lot of how I think about technology comes from home. If a tool saves me an hour, I would rather spend that hour with my family than answer more email.
            </p>
            <p class="body">
                That is also how I teach. The point of using AI well is to get the boring parts done faster, so you have time for the parts that need a person.
            </p>
            <a class="link" href="{{ route('story') }}">More about me</a>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>Recent writing</h2>
                <div>
                    <p class="body">I write down what I learn from talks, classes and projects. Most pieces are short and practical. Start with the newest one, or browse by topic.</p>
                    <a class="link" href="{{ route('writing') }}">All writing</a>
                </div>
            </div>

            @if ($featured)
                <article class="card card--feature">
                    <div class="card__media">
                        <x-photo :name="$featured->image ?? 'purpose-mountain'" :alt="$featured->title"
                                 sizes="(max-width: 900px) 100vw, 50vw" />
                    </div>
                    <div class="card__body">
                        <div class="tag-row">
                            <span class="chip chip--accent">{{ ucfirst($featured->pillar) }}</span>
                            <span class="chip">{{ $featured->format }}</span>
                            <span class="chip">{{ $featured->reading_time }} min</span>
                        </div>
                        <h3>{{ $featured->title }}</h3>
                        <p>{{ $featured->dek }}</p>
                        <div class="card__foot">
                            <span>{{ $featured->dateLabel() }}</span>
                            <a class="link" href="{{ $featured->url() }}">Read</a>
                        </div>
                    </div>
                </article>
            @endif

            <div class="grid grid--3">
                @foreach ($latest as $post)
                    <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <figure class="quote">
                <blockquote>Clear, practical and immediately useful. Our team left with clarity and a real plan, not a folder of slides.</blockquote>
                <figcaption>
                    <b>Aisyah Rahman</b>
                    Business owner, Shah Alam
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="cta" id="connect">
        <div class="wrap cta__inner">
            <h2>Get in touch</h2>
            <p class="lede">Planning a talk, a class or a project? Or you just have a question about using AI in your work? Send me an email. I read everything myself and I usually reply within two working days.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('speaking') }}#book">Invite me to speak</a>
            </div>
        </div>
    </section>
</div>
