<x-slot:description>{{ $series['lede'] }}</x-slot:description>

@php
    $facetUrl = function (string $key, string $value) use ($series, $year, $theme) {
        $query = array_filter(['year' => $year, 'theme' => $theme]);

        if ($value === '') {
            unset($query[$key]);
        } else {
            $query[$key] = $value;
        }

        return route('series', ['series' => $series['slug']] + $query);
    };
@endphp

<div>
    <section class="phero phero--plain">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <a class="crumb" href="{{ route('talks') }}">
                    <span aria-hidden="true">←</span> Where I have spoken
                </a>
                <h1>{{ $series['name'] }}</h1>
                <p class="lede">{{ $series['lede'] }}</p>
            </div>
        </div>
    </section>

    <section class="strip">
        <div class="wrap strip__grid">
            <div>
                <b>{{ $series['count'] }}</b>
                <span>posters · one poster per session</span>
            </div>
            <div>
                <b>{{ $series['span_months'] }}</b>
                <span>months · {{ $series['date_label'] }}</span>
            </div>
            <div>
                <b>2</b>
                <span>languages · Bahasa Malaysia and Bahasa Indonesia</span>
            </div>
            <div>
                <b>{{ count(\App\Support\Series::themes()) }}</b>
                <span>topics · the basics of small business</span>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="head head--top">
                <div class="stack">
                    <h2>Why I keep these posters</h2>
                    @foreach ($series['why'] as $paragraph)
                        <p class="body">{{ $paragraph }}</p>
                    @endforeach
                    <p class="why__note">None of these sessions was about AI. That came later.</p>
                </div>

                <div class="why__aside">
                    <p class="body">{{ $series['summary'] }}</p>
                    <dl class="kv kv--tight">
                        <div>
                            <dt>Format</dt>
                            <dd>{{ $series['format'] }}</dd>
                        </div>
                        <div>
                            <dt>Language</dt>
                            <dd>{{ $series['lang'] }}</dd>
                        </div>
                        <div>
                            <dt>Audience</dt>
                            <dd>{{ $series['audience'] }}</dd>
                        </div>
                        <div>
                            <dt>Run by</dt>
                            <dd>{{ $series['org'] }}<br><span>{{ $series['role'] }}</span></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <section class="section rule-top" id="wall">
        <div class="wrap">
            <div class="section-intro">
                <h2>All the posters</h2>
            </div>

            <nav class="filters" aria-label="Filter the series">
                <div class="filters__row">
                    <span class="label">Year</span>
                    <a class="chip {{ $year === '' ? 'chip--on' : '' }}"
                       href="{{ $facetUrl('year', '') }}"
                       @if ($year === '') aria-current="true" @endif>All</a>
                    @foreach ($series['years']->keys() as $y)
                        <a class="chip {{ $year === (string) $y ? 'chip--on' : '' }}"
                           href="{{ $facetUrl('year', (string) $y) }}"
                           @if ($year === (string) $y) aria-current="true" @endif>{{ $y }}</a>
                    @endforeach
                </div>

                <div class="filters__row">
                    <span class="label">Theme</span>
                    <a class="chip {{ $theme === '' ? 'chip--on' : '' }}"
                       href="{{ $facetUrl('theme', '') }}"
                       @if ($theme === '') aria-current="true" @endif>All</a>
                    @foreach (\App\Support\Series::themes() as $key => $label)
                        @continue (! isset($themeCounts[$key]))
                        <a class="chip {{ $theme === $key ? 'chip--on' : '' }}"
                           href="{{ $facetUrl('theme', $key) }}"
                           @if ($theme === $key) aria-current="true" @endif>{{ $label }}</a>
                    @endforeach
                </div>
            </nav>

            <div class="filter-summary">
                <p class="small" aria-live="polite">
                    @if ($filtered)
                        <b>{{ $episodes->count() }}</b> of {{ $series['count'] }} posters
                    @else
                        <b>{{ $series['count'] }}</b> posters, oldest first
                    @endif
                </p>
                @if ($filtered)
                    <a class="link" href="{{ route('series', $series['slug']) }}">Clear filters</a>
                @endif
            </div>

            @forelse ($groups as $groupYear => $rows)
                <div class="wall-group">
                    <h2 class="year-mark">
                        {{ $groupYear }}
                        <span>{{ $rows->count() }} {{ \Illuminate\Support\Str::plural('poster', $rows->count()) }}</span>
                        <span>{{ \Illuminate\Support\Carbon::parse($rows->first()['date'])->format('M') }} – {{ \Illuminate\Support\Carbon::parse($rows->last()['date'])->format('M') }}</span>
                    </h2>

                    <div class="wall">
                        @foreach ($rows as $ep)
                            @continue (! $ep['src'])
                            <a class="wall__item"
                               href="{{ $ep['src'] }}"
                               data-lightbox
                               data-alt="{{ $ep['alt'] }}"
                               data-caption-title="{{ $ep['title'] }}"
                               data-caption-meta="{{ $ep['date_label'] }} · {{ $ep['theme_label'] }}@if ($ep['en']) · {{ $ep['en'] }}@endif">
                                <div class="wall__img">
                                    <picture>
                                        <source type="image/webp"
                                                srcset="{{ $ep['srcset'] }}"
                                                sizes="(max-width: 620px) 46vw, (max-width: 900px) 31vw, (max-width: 1080px) 22vw, 19vw">
                                        <img src="{{ $ep['src'] }}"
                                             alt="{{ $ep['alt'] }}"
                                             @if ($ep['width']) width="{{ $ep['width'] }}" height="{{ $ep['height'] }}" @endif
                                             loading="lazy" decoding="async">
                                    </picture>
                                </div>
                                <div class="wall__cap">
                                    <span>{{ $ep['date_label'] }}</span>
                                    <span>{{ $ep['theme_label'] }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @empty
                <p class="lib-empty">No posters match that filter. <a class="link" href="{{ route('series', $series['slug']) }}">Clear the filters</a> to see them all.</p>
            @endforelse
        </div>
    </section>

    <section class="section section--tight">
        <div class="wrap--narrow closing-note">
            <h2>About the posters</h2>
            <p class="body">The posters are shown as they were posted, typos and all. Cleaning them up now would not be honest.</p>
            <div class="closing__actions">
                <a class="btn btn--primary" href="{{ route('talks') }}">See where I speak now</a>
                <a class="btn btn--ghost" href="{{ route('speaking') }}#book">Invite me to speak</a>
            </div>
        </div>
    </section>

    <dialog class="lb lb--cap" data-lightbox-dialog aria-label="Poster viewer">
        <button class="lb__btn lb__close" type="button" data-lb-close aria-label="Close">✕</button>
        <button class="lb__btn lb__btn--prev" type="button" data-lb-prev aria-label="Previous poster">←</button>
        <img alt="">
        <button class="lb__btn lb__btn--next" type="button" data-lb-next aria-label="Next poster">→</button>
        <div class="lb__cap" aria-live="polite">
            <b data-lb-cap-title></b>
            <span data-lb-cap-meta></span>
        </div>
    </dialog>
</div>
