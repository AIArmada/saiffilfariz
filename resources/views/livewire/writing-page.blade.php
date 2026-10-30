<x-slot:description>Field notes from Saiffil Fariz on code, commerce, influence, education and character: the five perspectives behind his work with AI, business and people.</x-slot:description>

@php
    // Each filter is a shareable URL and remains available without JavaScript.
    $facetUrl = function (string $key, string $value) use ($pillar, $format, $audience) {
        $query = array_filter([
            'pillar' => $pillar,
            'format' => $format,
            'for' => $audience,
        ]);

        if ($value === '') {
            unset($query[$key]);
        } else {
            $query[$key] = $value;
        }

        return route('ideas', $query);
    };
@endphp

<div>
    <section class="phero phero--wide">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Notes from a connected world</p>
                <h1>Ideas</h1>
                <p class="lede">How I think and teach across software, business, learning and creative work. Explore practical notes across five connected topics, alongside talks and workshops in the Speaking archive.</p>
                <p class="small"><a class="link" href="{{ route('speaking') }}">Browse talks, workshops and panels</a></p>
            </div>
            <div class="phero__media phero__media--wide">
                <x-photo name="editorial-fieldnotes-v1" alt="Gold-edged pages unfolding into a flowing metallic ribbon"
                         sizes="(max-width: 900px) 100vw, 50vw" :eager="true" />
            </div>
        </div>
    </section>

    <div class="wrap filters-wrap">
        @if (! empty(config('site.learning_paths')))
        <section aria-label="Learning paths">
            <div class="head head--top" style="margin-bottom:24px">
                <h2>Start here</h2>
                <p class="body">Three ways in, depending on what you need next.</p>
            </div>
            <div class="grid grid--3" style="margin-bottom:40px">
                @foreach (config('site.learning_paths', []) as $path)
                    <a class="card card--flat" href="{{ route($path['route'], $path['params']) }}">
                        <p class="small">{{ $path['step'] }}</p>
                        <h3>{{ $path['name'] }}</h3>
                        <p>{{ $path['line'] }}</p>
                    </a>
                @endforeach
            </div>
        </section>
        @endif

        <nav class="filters">
            <div class="filters__row">
                <span class="label">Topic</span>
                <a class="chip {{ $pillar === '' ? 'chip--on' : '' }}"
                   href="{{ $facetUrl('pillar', '') }}"
                   @if ($pillar === '') aria-current="true" @endif>All</a>
                @foreach (config('site.pillars') as $item)
                    <a class="chip {{ $pillar === $item['slug'] ? 'chip--on' : '' }}"
                       href="{{ $facetUrl('pillar', $item['slug']) }}"
                       @if ($pillar === $item['slug']) aria-current="true" @endif>{{ $item['name'] }}</a>
                @endforeach
            </div>

            <details class="filters__advanced">
                <summary>Advanced filters: format and audience</summary>
                <div class="filters__row">
                    <span class="label">Format</span>
                    <a class="chip {{ $format === '' ? 'chip--on' : '' }}"
                       href="{{ $facetUrl('format', '') }}"
                       @if ($format === '') aria-current="true" @endif>All</a>
                    @foreach (config('site.formats') as $item)
                        <a class="chip {{ $format === $item ? 'chip--on' : '' }}"
                           href="{{ $facetUrl('format', $item) }}"
                           @if ($format === $item) aria-current="true" @endif>{{ $item }}</a>
                    @endforeach
                </div>

                <div class="filters__row">
                    <span class="label">For</span>
                    <a class="chip {{ $audience === '' ? 'chip--on' : '' }}"
                       href="{{ $facetUrl('for', '') }}"
                       @if ($audience === '') aria-current="true" @endif>Everyone</a>
                    @foreach (config('site.audiences') as $item)
                        <a class="chip {{ $audience === $item ? 'chip--on' : '' }}"
                           href="{{ $facetUrl('for', $item) }}"
                           @if ($audience === $item) aria-current="true" @endif>{{ $item }}</a>
                    @endforeach
                </div>
            </details>
        </nav>

        <div class="filter-count">
            <p class="small" aria-live="polite">
                @if ($filtered)
                    <b>{{ $posts->count() }}</b> of {{ $total }} pieces
                @else
                    <b>{{ $total }}</b> pieces, newest first
                @endif
            </p>
            @if ($filtered)
                <a class="link" href="{{ route('ideas') }}">Clear filters</a>
            @endif
        </div>
    </div>

    <section class="section section--tight">
        <div class="wrap">
            @if ($posts->isEmpty())
                <div class="lib-empty">
                    <h2>Nothing here yet.</h2>
                    <p class="body">Try a different topic, or <a class="link" href="{{ route('ideas') }}">see everything</a>.</p>
                </div>
            @else
                <div class="lib-grid">
                    @foreach ($posts as $post)
                        <x-post-card :post="$post" />
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head head--wide">
                <h2>Browse by topic</h2>
            </div>
            <div class="grid grid--5">
                @foreach (config('site.pillars') as $item)
                    <a class="topic-card" href="{{ route('pillar', $item['slug']) }}">
                        <div class="topic-card__media">
                            <x-photo :name="$item['image']" :alt="$item['name']" sizes="(max-width: 620px) 50vw, 20vw" />
                        </div>
                        <h3>{{ $item['name'] }}</h3>
                        <p>{{ $item['line'] }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="wrap cta__inner">
            <h2>Put an idea to work</h2>
            <p class="lede">Reading is a start. A talk, a programme or a project is how an idea changes the way your team works.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="{{ route('work') }}#enquire">Ways to work together</a>
                <a class="btn btn--ghost" href="{{ route('programmes') }}">Explore the programmes</a>
            </div>
        </div>
    </section>
</div>
