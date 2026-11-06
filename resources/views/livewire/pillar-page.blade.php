<x-slot:title>{{ $shelf['name'] }} · Ideas | Saiffil Fariz</x-slot:title>
<x-slot:description>{{ $shelf['blurb'] }}</x-slot:description>

<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <a class="crumb" href="{{ route('ideas') }}">Ideas</a>
                <h1>{{ $shelf['name'] }}</h1>
                <p class="lede">{{ $shelf['blurb'] }}</p>
                <p class="small topic-count">{{ $posts->count() }} {{ Str::plural('piece', $posts->count()) }} on this topic.</p>
            </div>
            <div class="phero__media">
                <x-photo :name="$shelf['image']" :alt="$shelf['name']"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" />
            </div>
        </div>
    </section>

    <section class="section section--tight section--journal">
        <div class="wrap">
            @if ($posts->isEmpty())
                <div class="lib-empty">
                    <h2>Nothing here yet.</h2>
                    <p class="body">I have not published anything on this topic yet. <a class="link" href="{{ route('ideas') }}">Browse everything</a> in the meantime.</p>
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

    <section class="section section--tight section--muted">
        <div class="wrap split">
            <div class="stack"><h2>From ideas to making.</h2><p class="body">Ideas are only half the work. Here is where this topic goes next.</p></div>
            <div class="stack">
                @foreach ($nextSteps as $step)
                    <a class="link" href="{{ route($step[1]).$step[2] }}">{{ $step[0] }}</a><br>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--paper">
        <div class="wrap">
            <div class="head">
                <h2>Other topics</h2>
                <p class="body">My ideas sit under five topics. Explore them in any order.</p>
            </div>
            <div class="grid grid--4">
                @foreach ($others as $other)
                    <a class="card" href="{{ route('pillar', $other['slug']) }}">
                        <div class="card__media">
                            <x-photo :name="$other['image']" :alt="$other['name']"
                                     sizes="(max-width: 620px) 100vw, (max-width: 900px) 50vw, 25vw" />
                        </div>
                        <div class="card__body">
                            <h3>{{ $other['name'] }}</h3>
                            <p>{{ $other['line'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</div>
