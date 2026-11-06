<x-slot:description>Talks and workshops by Saiffil Fariz across AI, business and practical technology. Explore sessions, photographs and the business teaching archive.</x-slot:description>

<div>
    <section class="phero phero--archive">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Ideas, shared in the room</p>
                <h1>Speaking</h1>
                <p class="lede">A record of talks, workshops and panels for ministries, agencies, universities, companies and community groups. This archive lists {{ $total }} documented sessions, with photos and stories where available.</p>
            </div>
            <div class="phero__media">
                <x-photo name="profile-metallicgold" alt="Saiffil in a gold blazer"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" class="cutout-top" />
            </div>
        </div>
    </section>

    @if ($featured->isNotEmpty())
        <section class="section">
            <div class="wrap">
                <div class="talk-grid">
                    @foreach ($featured as $talk)
                        <x-talk-card :talk="$talk" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($series && $seriesStrip->isNotEmpty())
        <section class="section section--pine">
            <div class="wrap split">
                <div class="stack">
                    <h2>The {{ $series['name'] }} series, 2020 to 2024</h2>
                    <p class="body">Before the AI talks, I ran a weekly live series called {{ $series['name'] }} from July 2020 to August 2021, then continued it as occasional sessions at Maxxima Lifestyle Hub until January 2024. The topics were sales, follow-up, mindset and running a small business. We kept the announcement posters, and they are all here.</p>
                    <a class="btn btn--primary" href="{{ $series['url'] }}">See all {{ $series['count'] }} posters</a>
                </div>
                <div class="mini-wall" aria-hidden="true">
                    @foreach ($seriesStrip as $ep)
                        <a class="mini-wall__item" href="{{ $series['url'] }}" tabindex="-1">
                            <img src="{{ $ep['thumb'] }}" alt=""
                                 @if ($ep['width']) width="{{ $ep['width'] }}" height="{{ $ep['height'] }}" @endif
                                 loading="lazy" decoding="async">
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($listed->isNotEmpty())
        <section class="section section--journal">
            <div class="wrap">
                <div class="head">
                    <h2>More sessions</h2>
                    <p class="body">These sessions have no photo page. Sometimes the organiser asked for no photography. Sometimes the session was online or on air.</p>
                </div>
                @foreach ($listedGroups as $group)
                    @php($rows = $listed->whereIn('type', $group['types'])->values())
                    @continue($rows->isEmpty())
                    <h3 class="h3" style="margin:34px 0 4px">{{ $group['title'] }}</h3>
                    <p class="small" style="margin-bottom:6px">{{ $group['blurb'] }} <a class="link link--inline" href="{{ $group['link'] }}">{{ $group['linkLabel'] }}</a></p>
                    <div class="rows">
                    @foreach ($rows as $talk)
                        <div class="rows__item {{ ! empty($talk['poster']) ? 'rows__item--poster' : '' }}">
                            @if (! empty($talk['poster']))
                                <a class="rows__poster"
                                   href="{{ asset('assets/img/opt/'.$talk['poster'].'-640.webp') }}"
                                   target="_blank" rel="noopener"
                                   aria-label="Open the poster for {{ $talk['title'] }}">
                                    <x-photo :name="$talk['poster']"
                                             :alt="'Poster for '.$talk['title']"
                                             sizes="128px" />
                                </a>
                            @endif
                            <div>
                                <h3>{{ $talk['title'] }}</h3>
                                <p>{{ $talk['summary'] }}</p>
                            </div>
                            <div class="rows__meta">
                                <b>{{ $talk['org'] }}</b>
                                {{ $talk['type_label'] }} · {{ $talk['date_label'] }}<br>
                                {{ $talk['venue'] }}
                            </div>
                        </div>
                    @endforeach
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <section class="cta" id="book">
        <div class="wrap cta__inner">
            <h2>Planning a session?</h2>
            <p class="lede">Tell me who will be in the room and what you want them to take away. I will reply with whether I am the right fit.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="{{ route('speaking-service') }}#book">Invite me to speak</a>
                <a class="btn btn--ghost" href="{{ route('speaking-service') }}">Speaking and workshops</a>
            </div>
        </div>
    </section>
</div>
