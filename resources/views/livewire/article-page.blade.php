<article class="reading-page">
    <header class="wrap--narrow article-head">
        <a class="crumb" href="{{ route('writing') }}">
            <span aria-hidden="true">←</span> Writing
        </a>

        <h1>{{ $post->title }}</h1>

        @if ($post->dek)
            <p class="lede">{{ $post->dek }}</p>
        @endif

        <div class="article-meta">
            <a class="chip chip--accent" href="{{ route('pillar', $post->pillar) }}">{{ $post->pillarName() }}</a>
            <span>{{ $post->format }}</span>
            <span>{{ $post->reading_time }} min read</span>
            <span>{{ $post->dateLabel() }}</span>
        </div>
    </header>

    <div class="article-image">
        <figure class="article-hero">
            <x-photo :name="$post->image ?: 'purpose-mountain'" :alt="$post->title"
                     sizes="(max-width: 960px) 100vw, 960px" :eager="true" />
        </figure>
    </div>

    <div class="wrap--narrow article-body">
        <div class="prose">
            {!! $post->html() !!}
        </div>

        <div class="article-taxonomy">
            <span class="label">Topic</span>
            <a class="chip chip--accent" href="{{ route('pillar', $post->pillar) }}">{{ $post->pillarName() }}</a>
            <a class="chip" href="{{ route('writing', ['format' => $post->format]) }}">{{ $post->format }}</a>
            <a class="chip" href="{{ route('writing', ['for' => $post->audience]) }}">{{ $post->audience }}</a>
        </div>
    </div>

    @if ($related->isNotEmpty())
        <section class="section section--tight" style="border-block:1px solid var(--rule)">
            <div class="wrap">
                <div class="section-intro">
                    <h2>More to read</h2>
                </div>
                <div class="grid grid--3">
                    @foreach ($related as $item)
                        <x-post-card :post="$item" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="section closing">
        <div class="wrap closing__inner">
            <h2>Want a session like this for your team?</h2>
            <p class="lede">
                I give talks and run classes on topics like this one. Tell me what your team needs and I will suggest a format.
            </p>
            <div class="closing__actions">
                <a class="btn" href="{{ route('speaking') }}#book">Invite me to speak</a>
                <a class="btn btn--ghost" href="{{ route('programmes') }}">See the programmes</a>
            </div>
        </div>
    </section>
</article>
