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

        return route('writing', $query);
    };
@endphp

<div>
    <section class="phero phero--wide">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Notes from a connected world</p>
                <h1>Writing</h1>
                <p class="lede">Short pieces from my talks, classes and projects. Most are practical. Some are just me thinking in public. Browse everything, or filter by topic.</p>
            </div>
            <div class="phero__media phero__media--wide">
                <x-photo name="editorial-fieldnotes-v1" alt="Gold-edged pages unfolding into a flowing metallic ribbon"
                         sizes="(max-width: 900px) 100vw, 50vw" :eager="true" />
            </div>
        </div>
    </section>

    <div class="wrap filters-wrap">
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
                <span class="label">Written for</span>
                <a class="chip {{ $audience === '' ? 'chip--on' : '' }}"
                   href="{{ $facetUrl('for', '') }}"
                   @if ($audience === '') aria-current="true" @endif>Everyone</a>
                @foreach (config('site.audiences') as $item)
                    <a class="chip {{ $audience === $item ? 'chip--on' : '' }}"
                       href="{{ $facetUrl('for', $item) }}"
                       @if ($audience === $item) aria-current="true" @endif>{{ $item }}</a>
                @endforeach
            </div>
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
                <a class="link" href="{{ route('writing') }}">Clear filters</a>
            @endif
        </div>
    </div>

    <section class="section section--tight">
        <div class="wrap">
            @if ($posts->isEmpty())
                <div class="lib-empty">
                    <h2>Nothing here yet.</h2>
                    <p class="body">Try a different topic, or <a class="link" href="{{ route('writing') }}">see everything</a>.</p>
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
</div>
