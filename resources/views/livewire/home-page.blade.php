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
                <p class="hero__eyebrow">{{ config('site.positioning.name') }} <span>{{ config('site.positioning.themes') }}</span></p>
                <h1>Outthink.<br>Outcreate.<br><em>Outlast.</em></h1>
                <p class="lede">
                    I connect technology, business and people — turning complex ideas into things people can understand, use and grow with.
                </p>
                <div class="hero__actions">
                    <a class="btn hero__primary" href="{{ route('work') }}#enquire">Let’s work together <span aria-hidden="true">→</span></a>
                    <a class="btn hero__secondary" href="{{ route('story') }}">Explore my world</a>
                </div>
                <p class="hero__proof">{{ config('site.proof') }}</p>
            </div>
        </div>
    </section>

    @if (! empty(config('site.worlds')))
    <div class="wrap connection-rail">
        <p class="connection-rail__intro">Four worlds. One perspective.</p>
        <nav class="connection-rail__links" aria-label="Explore the four connected worlds">
            @foreach (config('site.worlds', []) as $world)
                <a href="{{ route($world['route']).($world['anchor'] ? '#'.$world['anchor'] : '') }}">{{ $world['name'] }}</a>
            @endforeach
        </nav>
    </div>

    <section class="section section--tight">
        <div class="wrap">
            <div class="head">
                <h2>Connected worlds</h2>
                <p class="body">Technology, business, people and creativity are not separate services. They are one story told in different rooms. Follow any thread to the proof.</p>
            </div>
            <div class="grid grid--4">
                @foreach (config('site.worlds', []) as $world)
                    <article class="card card--flat">
                        <h3>{{ $world['name'] }}</h3>
                        <p>{{ $world['line'] }}</p>
                        <a class="link" href="{{ route($world['route']).($world['anchor'] ? '#'.$world['anchor'] : '') }}">See it in practice</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

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

    <x-creations-showcase />

    <section class="section" id="work-with-me">
        <div class="wrap">
            <div class="head">
                <div>
                    <h2>What I do</h2>
                </div>
                <p class="body">
                    We can start with a talk, build your team's capability, work through a business problem or create the software that moves an idea forward. Tell me what you are trying to get done and we can find the right place to start.
                </p>
            </div>

            <div class="service-list">
                @foreach (config('site.services') as $serviceRoute => $service)
                    @continue ($serviceRoute === 'build')
                    <article class="service-row" wire:key="home-service-{{ $serviceRoute }}">
                        <div class="service-row__media">
                            <x-photo :name="$service['image']" :alt="$service['alt']"
                                     sizes="(max-width: 720px) 100vw, 44vw" />
                        </div>
                        <div class="service-row__copy">
                            <p class="small">{{ $service['meta'] }}</p>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                            <a class="link" href="{{ route($serviceRoute) }}">{{ $service['cta'] }}</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <x-build-showcase />

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
                That is also how I teach and build. A useful tool takes repetitive work off people's plates so they have time for the parts that need them.
            </p>
            <a class="link" href="{{ route('story') }}">More about me</a>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>Recent ideas</h2>
                <div>
                    <p class="body">I share what I learn from talks, classes and projects in different formats. Start with the newest one, or browse by topic.</p>
                    <a class="link" href="{{ route('ideas') }}">Explore ideas</a>
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
            <x-photo name="profile-pointingforward" alt="Saiffil pointing towards you" class="cta__avatar"
                     sizes="120px" />
            <h2>Get in touch</h2>
            <p class="lede">{{ config('site.contact.invitation') }}</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('work') }}#enquire">Ways to work together</a>
            </div>
        </div>
    </section>
</div>
