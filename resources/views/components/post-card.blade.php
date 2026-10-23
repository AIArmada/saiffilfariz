@props([
    'post',
    'sizes' => '(max-width: 620px) 100vw, (max-width: 900px) 50vw, 33vw',
])

<a class="card" href="{{ $post->url() }}">
    <div class="card__media">
        <x-photo :name="$post->image ?: 'purpose-mountain'" :alt="$post->title" :sizes="$sizes" />
    </div>
    <div class="card__body">
        <div class="tag-row">
            <span class="chip chip--accent">{{ $post->pillarName() }}</span>
            <span class="chip">{{ $post->format }}</span>
        </div>
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->dek }}</p>
        <div class="card__foot">
            <span>{{ $post->reading_time }} min read · {{ $post->audience }}</span>
            <span class="link">Read <span aria-hidden="true">→</span></span>
        </div>
    </div>
</a>
