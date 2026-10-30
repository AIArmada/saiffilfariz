<x-slot:description>{{ $engagement['summary'] }}</x-slot:description>

@php
    $gallery = $engagement['gallery'];
    $letter = $engagement['letter'] ?? null;
@endphp

<article class="reading-page">
    {{-- ── Head ─────────────────────────────────────────────── --}}
    <header class="wrap--narrow article-head">
        <a class="crumb" href="{{ route('speaking') }}">
            <span aria-hidden="true">←</span> Where I have spoken
        </a>

        <h1>{{ $engagement['title'] }}</h1>

        <p class="lede">{{ $engagement['summary'] }}</p>

        <div class="article-meta">
            <span>{{ $engagement['type_label'] }}</span>
            <span>{{ $engagement['date_label'] }}</span>
            <span style="color:var(--ink);font-weight:600">{{ $engagement['org'] }}</span>
            <span>{{ $engagement['venue'] }}</span>
        </div>
    </header>

    {{-- ── Cover ────────────────────────────────────────────── --}}
    <div style="width:min(1000px, 100% - var(--gutter) * 2);margin-inline:auto">
        <figure class="article-hero" style="aspect-ratio:16/10">
            <x-photo :name="$engagement['cover']"
                     :alt="$engagement['title'].' — '.$engagement['org']"
                     sizes="(max-width: 1000px) 100vw, 1000px" :eager="true" />
        </figure>
    </div>

    {{-- ── Facts ────────────────────────────────────────────── --}}
    <div class="wrap--narrow" style="padding:clamp(32px,4vw,48px) 0 0">
        <dl class="kv">
            <div>
                <dt>When</dt>
                <dd>{{ $engagement['date_label'] }}@if (! empty($engagement['date_note'])) — {{ $engagement['date_note'] }}@endif</dd>
            </div>
            <div>
                <dt>Where</dt>
                <dd>{{ $engagement['venue'] }}</dd>
            </div>
            <div>
                <dt>Who</dt>
                <dd>{{ $engagement['audience'] }}</dd>
            </div>
            <div>
                <dt>Language</dt>
                <dd>{{ $engagement['lang'] }}</dd>
            </div>
            @if (! empty($engagement['org_full']))
                <div>
                    <dt>Organisation</dt>
                    <dd>{{ $engagement['org_full'] }}</dd>
                </div>
            @endif
        </dl>
    </div>

    {{-- ── What we covered ──────────────────────────────────── --}}
    @if (! empty($engagement['outcomes']) || ! empty($engagement['modules']))
        <div class="wrap--narrow" style="padding:clamp(36px,4.5vw,56px) 0 0">
            <h2>What we covered</h2>

            @if (! empty($engagement['tagline']))
                <h2 style="margin-top:14px">{{ $engagement['tagline'] }}</h2>
            @endif

            @if (! empty($engagement['outcomes']))
                <ul class="outcomes">
                    @foreach ($engagement['outcomes'] as $outcome)
                        @php
                            // "Faham — what AI actually is" becomes a bold lead-in.
                            $parts = explode(' — ', $outcome, 2);
                        @endphp
                        <li>
                            <b>{{ $parts[0] }}</b>@if (isset($parts[1])) — {{ $parts[1] }}@endif
                        </li>
                    @endforeach
                </ul>
            @endif

            @if (! empty($engagement['modules']))
                <div class="tag-row" style="margin-top:24px">
                    @foreach ($engagement['modules'] as $module)
                        <span class="chip">{{ $module }}</span>
                    @endforeach
                </div>
            @endif
        </div>
    @endif

    {{-- ── Gallery ──────────────────────────────────────────── --}}
    @if (! empty($gallery))
        <section class="section">
            <div class="wrap">
                <div class="section-intro">
                    <h2>Photos from the session</h2>
                    <p class="small">All the photos, in the order they were taken. Click a photo to see it larger.</p>
                </div>

                <div class="gal">
                    @foreach ($gallery as $i => $photo)
                        <a class="gal__item" href="{{ $photo['src'] }}" data-lightbox
                           data-alt="{{ $engagement['title'] }} — photograph {{ $i + 1 }}">
                            <img src="{{ $photo['src'] }}"
                                 srcset="{{ $photo['srcset'] }}"
                                 sizes="(max-width: 620px) 50vw, (max-width: 900px) 33vw, 25vw"
                                 alt="{{ $engagement['title'] }} — photograph {{ $i + 1 }}"
                                 @if ($photo['width']) width="{{ $photo['width'] }}" height="{{ $photo['height'] }}" @endif
                                 loading="lazy" decoding="async">
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- ── Letter ───────────────────────────────────────────── --}}
    @if ($letter)
        <section class="section section--tight" style="border-top:1px solid var(--rule)">
            <div class="wrap">
                <div class="section-intro">
                    <h2>Letter from the organiser</h2>
                </div>

                <div class="doc">
                    <a class="doc__thumb" href="{{ asset($letter['file']) }}" target="_blank" rel="noopener">
                        <x-photo :name="'talk-'.$engagement['slug'].'-letter'"
                                 :alt="'First page of the '.$letter['label'].' from '.$engagement['org']"
                                 sizes="180px" />
                    </a>
                    <div>
                        <h3>{{ $letter['label'] }}</h3>
                        <p>
                            {{ $engagement['org'] }} · {{ \Illuminate\Support\Carbon::parse($letter['date'])->format('j F Y') }}
                            @if (! empty($letter['ref'])) · Ref. {{ $letter['ref'] }}@endif
                        </p>
                        <p style="margin-top:10px">
                            Signed by {{ $letter['signatory'] }}.
                        </p>
                        <p style="margin-top:18px">
                            <a class="btn btn--sm btn--ghost" href="{{ asset($letter['file']) }}"
                               target="_blank" rel="noopener">
                                Read the letter (PDF)
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- ── Next / previous ──────────────────────────────────── --}}
    <section class="section section--tight" style="border-top:1px solid var(--rule)">
        <div class="wrap" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:18px">
            @if ($previous)
                <a class="link link--ink" href="{{ $previous['url'] }}">
                    <span aria-hidden="true">←</span> {{ $previous['org'] }}
                </a>
            @else
                <a class="link link--ink" href="{{ route('speaking') }}">
                    <span aria-hidden="true">←</span> All sessions
                </a>
            @endif

            @if ($next)
                <a class="link link--ink" href="{{ $next['url'] }}">
                    {{ $next['org'] }} <span aria-hidden="true">→</span>
                </a>
            @else
                <a class="link link--ink" href="{{ route('speaking-service') }}#book">
                    Invite me to speak <span aria-hidden="true">→</span>
                </a>
            @endif
        </div>
    </section>

    {{-- ── Lightbox ─────────────────────────────────────────── --}}
    @if (! empty($gallery))
        <dialog class="lb" data-lightbox-dialog aria-label="Photograph viewer">
            <button class="lb__btn lb__close" type="button" data-lb-close aria-label="Close">✕</button>
            <button class="lb__btn lb__btn--prev" type="button" data-lb-prev aria-label="Previous photograph">←</button>
            {{-- src is filled by app.js when the dialog opens; no empty request. --}}
            <img alt="">
            <button class="lb__btn lb__btn--next" type="button" data-lb-next aria-label="Next photograph">→</button>
        </dialog>
    @endif
</article>
