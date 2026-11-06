@props([
    'talk',
    'sizes' => '(max-width: 900px) 100vw, 50vw',
])

<article class="card talk-card">
    <a class="card__media" href="{{ $talk['url'] }}"
       aria-label="See the session: {{ $talk['title'] }}">
        <x-photo :name="$talk['cover']" :alt="$talk['title'].' — '.$talk['org']" :sizes="$sizes" />
    </a>
    <div class="card__body">
        <div class="tag-row">
            <span class="chip chip--accent">{{ $talk['type_label'] }}</span>
            <span class="chip">{{ $talk['date_label'] }}</span>
            @if (! empty($talk['letter']))
                <span class="chip chip--terra">Letter of appreciation</span>
            @endif
        </div>
        <span class="talk-card__org">{{ $talk['org'] }}</span>
        <h3><a href="{{ $talk['url'] }}">{{ $talk['title'] }}</a></h3>
        <p>{{ $talk['summary'] }}</p>
        <div class="card__foot">
            <span>{{ count($talk['gallery']) }} photos</span>
            <span class="talk-card__actions">
                <a class="link" href="{{ $talk['url'] }}">See the session <span aria-hidden="true">→</span></a>
                @if (! empty($talk['letter']))
                    <a class="link" href="{{ asset($talk['letter']['file']) }}"
                       target="_blank" rel="noopener">Letter (PDF)</a>
                @endif
            </span>
        </div>
    </div>
</article>
