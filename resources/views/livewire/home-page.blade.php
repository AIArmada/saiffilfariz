<div class="v3-page v3-page--home">
    <section class="hero hero--connected">
        <div class="hero__visual v3-home-art" aria-hidden="true">
            <x-photo name="purpose-mountain" alt="" sizes="100vw" :eager="true" />
        </div>
        <div class="v3-home-portrait" aria-hidden="true">
            <x-photo name="home-editorial-portrait" alt="" sizes="(max-width: 720px) 75vw, 44vw" :eager="true" />
        </div>
        <div class="wrap hero__inner">
            <div class="hero__copy">
                <p class="hero__eyebrow">Technology · Business <span>Creativity · People</span></p>
                <h1>Different worlds.<br><em>One purpose.</em></h1>
                <p class="lede">
                    I build businesses, develop technology, create experiences and share what I’ve learned — with one intention: to create something useful for people.
                </p>
                <div class="hero__actions">
                    <a class="btn hero__primary" href="{{ route('story') }}">Explore my story <span aria-hidden="true">→</span></a>
                    <a class="btn hero__secondary" href="{{ route('creations') }}">See my work</a>
                </div>
            </div>
        </div>
    </section>


    <section class="v3-journey" aria-labelledby="journey-heading">
        <div class="wrap">
            <div class="v3-journey__heading">
                <h2 id="journey-heading">A lifelong journey of building, learning and sharing.</h2>
                <p>It began with curiosity about technology. Each chapter taught me more about people, possibility and what makes an idea useful.</p>
            </div>
            <div class="v3-journey__steps">
                @foreach ([
                    ['Curiosity', 'A young mind fascinated by technology'],
                    ['Building', 'Turning ideas into working systems'],
                    ['Business', 'Learning about people and real execution'],
                    ['Sharing', 'Helping others understand and apply ideas'],
                    ['Impact', 'Creating meaningful, lasting value'],
                ] as $chapter)
                    <div class="v3-journey__step">
                        <strong>{{ $chapter[0] }}</strong>
                        <span>{{ $chapter[1] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="v3-pillars" aria-labelledby="pillars-heading">
        <div class="wrap">
            <div class="v3-pillars__intro">
                <h2 id="pillars-heading">Five pillars. One direction.</h2>
                <p>Different disciplines, brought together by a common intention.</p>
            </div>
            <div class="v3-pillars__grid">
                @foreach (config('site.pillars', []) as $index => $pillar)
                    <a class="v3-pillar" href="{{ route('pillar', $pillar['slug']) }}">
                        <span class="v3-pillar__art" aria-hidden="true">{{ ['⌘','↗','◉','✦','♡'][$index] ?? '✦' }}</span>
                        <span class="v3-pillar__label">{{ $pillar['name'] }}</span>
                    </a>
                @endforeach
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


    <section class="section section--tight section--pine" aria-labelledby="home-programmes-heading">
        <div class="wrap head">
            <div>
                <p class="label accent">Speaking & learning</p>
                <h2 id="home-programmes-heading">Make difficult ideas practical.</h2>
            </div>
            <div>
                <p class="body">Explore talks, workshops and programmes designed around real work, genuine understanding and useful next steps.</p>
                <a class="btn btn--primary" href="{{ route('programmes') }}">Explore programmes <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="band section--paper">
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

    @php($letter = $recognition['letter'] ?? null)
    @if ($recognition && $letter)
        <section class="section section--tight rule-top" id="recognition">
            <div class="wrap recognition">
                <a class="recognition__doc"
                   href="{{ asset($letter['file']) }}"
                   target="_blank" rel="noopener"
                   aria-label="Read the {{ $letter['label'] }} (PDF)">
                    <x-photo :name="'talk-'.$recognition['slug'].'-letter'"
                             :alt="'First page of the '.$letter['label'].' from '.$recognition['org']"
                             sizes="(max-width: 720px) 180px, 260px" />
                </a>
                <div class="stack">
                    <p class="label accent">Recognition</p>
                    <h2>A letter from {{ $recognition['org'] }}.</h2>
                    <blockquote class="recognition__quote">
                        “Penyampaian yang menarik, interaktif dan mudah difahami.”
                    </blockquote>
                    <p class="body">
                        After two hybrid sessions on AI literacy for its officers, {{ $recognition['org'] }} wrote to
                        record its appreciation — citing the practical examples, the interactive
                        delivery and the shift in how participants saw AI in their own work.
                    </p>
                    <p class="small">
                        {{ $letter['label'] }} · {{ \Illuminate\Support\Carbon::parse($letter['date'])->format('j F Y') }}
                        @if (! empty($letter['ref'])) · Ref. {{ $letter['ref'] }} @endif
                    </p>
                    <div class="cta__actions">
                        <a class="btn btn--sm btn--ghost"
                           href="{{ asset($letter['file']) }}"
                           target="_blank" rel="noopener">
                            Read the letter (PDF)
                        </a>
                        <a class="link" href="{{ route('talk', $recognition['slug']) }}">
                            See the session <span aria-hidden="true">→</span>
                        </a>
                        <a class="link" href="{{ route('speaking') }}">
                            All sessions <span aria-hidden="true">→</span>
                        </a>
                        <a class="link" href="{{ route('story') }}#learning">
                            Why I teach this way <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="section section--journal">
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
            <div class="quote-slider" data-quote-slider>
                @php($verifiedQuotes = collect($quotes)->filter(fn ($quote) => ! empty($quote['url']))->values())
                @foreach ($verifiedQuotes as $i => $quote)
                    <figure class="quote" data-quote-slide @hidden($i !== 0)>
                        <blockquote>{{ $quote['text'] }}</blockquote>
                        <figcaption>
                            <b>{{ $quote['name'] }}</b>
                            {{ $quote['role'] }}
                            @if ($quote['url'])
                                <a class="link link--inline" href="{{ $quote['url'] }}">See the session →</a>
                            @endif
                        </figcaption>
                    </figure>
                @endforeach
                @if ($verifiedQuotes->count() > 1)
                    <div class="quote-slider__controls">
                        <button type="button" class="btn btn--sm btn--ghost" data-quote-prev aria-label="Previous testimonial">←</button>
                        <p class="small" data-quote-status aria-live="polite">1 of {{ $verifiedQuotes->count() }}</p>
                        <button type="button" class="btn btn--sm btn--ghost" data-quote-next aria-label="Next testimonial">→</button>
                    </div>
                @endif
            </div>
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
