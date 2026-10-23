@props([
    'talk',
    'sizes' => '(max-width: 900px) 100vw, 50vw',
])

<a class="card talk-card" href="{{ $talk['url'] }}">
    <div class="card__media">
        <x-photo :name="$talk['cover']" :alt="$talk['title'].' — '.$talk['org']" :sizes="$sizes" />
    </div>
    <div class="card__body">
        <div class="tag-row">
            <span class="chip chip--accent">{{ $talk['type_label'] }}</span>
            <span class="chip">{{ $talk['date_label'] }}</span>
        </div>
        <span class="talk-card__org">{{ $talk['org'] }}</span>
        <h3>{{ $talk['title'] }}</h3>
        <p>{{ $talk['summary'] }}</p>
        <div class="card__foot">
            <span>{{ count($talk['gallery']) }} photos</span>
            <span class="link">See the session <span aria-hidden="true">→</span></span>
        </div>
    </div>
</a>
