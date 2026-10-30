<x-slot:title>{{ $creation['name'] }} · Project story by Saiffil Fariz</x-slot:title>
<x-slot:description>{{ $creation['intro'] }}</x-slot:description>

<article class="creation-story">
    <section class="creation-story__opening">
        <div class="wrap">
            <a class="crumb" href="{{ route('creations') }}">Creations</a>
            <div class="creation-story__hero">
                <div class="creation-story__intro">
                    <p class="creation-context">{{ $creation['eyebrow'] }}</p>
                    <h1>{{ $creation['headline'] }}</h1>
                    <p class="lede">{{ $creation['intro'] }}</p>
                    @if (isset($creation['status']) || isset($creation['relationship']))
                        <div class="tag-row" style="margin-top:18px">
                            @if (isset($creation['relationship']))
                                <span class="chip chip--accent">{{ $creation['relationship'] }}</span>
                            @endif
                            @if (isset($creation['status']))
                                <span class="chip">{{ $creation['status'] }}</span>
                            @endif
                        </div>
                    @endif
                    <div class="creation-story__hero-actions">
                        @if (isset($creation['screenshots']))
                            <a class="btn btn--primary" href="#inside-experience">Explore the booking journey</a>
                            @if (isset($creation['url']))
                                <a class="link" href="{{ $creation['url'] }}" target="_blank" rel="noopener noreferrer">{{ $creation['url_label'] }} <span aria-hidden="true">↗</span></a>
                            @elseif (isset($creation['ended_note']))
                                <p class="small">{{ $creation['ended_note'] }}</p>
                            @endif
                        @elseif (isset($creation['url']))
                            <a class="btn btn--primary" href="{{ $creation['url'] }}" target="_blank" rel="noopener noreferrer">{{ $creation['url_label'] }} <span aria-hidden="true">↗</span></a>
                            @if (isset($creation['related']))
                                <a class="link" href="{{ route('creation', $creation['related']['slug']) }}">{{ $creation['related']['label'] }}</a>
                            @else
                                <a class="link" href="{{ route('build') }}">Build a website or system with me</a>
                            @endif
                        @else
                            @if (isset($creation['related']))
                                <a class="btn btn--primary" href="{{ route('creation', $creation['related']['slug']) }}">{{ $creation['related']['label'] }}</a>
                            @endif
                            <a class="link" href="{{ route('build') }}">Build a website or system with me</a>
                            @if (isset($creation['ended_note']))
                                <p class="small">{{ $creation['ended_note'] }}</p>
                            @endif
                        @endif
                    </div>
                </div>
                <figure class="creation-story__visual">
                    <img src="{{ asset($creation['image']) }}" alt="{{ $creation['image_alt'] }}" width="{{ $creation['image_width'] ?? 1200 }}" height="{{ $creation['image_height'] ?? 850 }}" fetchpriority="high">
                    <figcaption><span>{{ $creation['name'] }}</span><span>Created by Saiffil Fariz</span></figcaption>
                </figure>
            </div>
            <div class="creation-story__thesis"><span>What makes this one matter</span><p>{{ $creation['partner'] }}</p></div>
            @if (isset($creation['audio']))
                <div class="creation-story__audio">
                    <div><span>Made for this project</span><h2>{{ $creation['track'] }}</h2><p>Music by Saiffil Fariz · {{ $creation['duration'] }}</p></div>
                    <div><img src="{{ asset($creation['waveform']) }}" alt="" aria-hidden="true" width="750" height="80"><audio controls preload="metadata" aria-label="Listen to {{ $creation['track'] }}"><source src="{{ asset($creation['audio']) }}" type="audio/mpeg"><a href="{{ asset($creation['audio']) }}">Listen to {{ $creation['track'] }}</a></audio></div>
                </div>
            @endif
        </div>
    </section>

    @if (isset($creation['screenshots']))
        <x-project-experience :screenshots="$creation['screenshots']" />
    @endif

    <section class="creation-story__journey" aria-label="How the experience works">
        <div class="wrap">
            <div class="creation-story__section-head"><p class="creation-context">The journey</p><h2>One idea, carried all the way through.</h2></div>
            <ol>
                @foreach ($creation['journey'] as $step)
                    <li><span>{{ $step['number'] }}</span><h3>{{ $step['title'] }}</h3><p>{{ $step['text'] }}</p></li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="creation-story__narrative">
        <div class="wrap">
            @foreach ($creation['sections'] as $index => $section)
                <section class="creation-story__chapter">
                    <div><p class="creation-context">{{ $section['label'] }}</p><span class="creation-story__chapter-number">0{{ $index + 1 }}</span></div>
                    <div><h2>{{ $section['title'] }}</h2><p>{{ $section['text'] }}</p></div>
                </section>
            @endforeach
        </div>
    </section>

    @if (isset($creation['related']))
        <aside class="creation-story__related">
            <div class="wrap"><p>This project connects to another part of the work.</p><a href="{{ route('creation', $creation['related']['slug']) }}">{{ $creation['related']['label'] }} <span aria-hidden="true">→</span></a></div>
        </aside>
    @endif

    <section class="creation-story__closing">
        <div class="wrap">
            <p class="creation-context">Have a project in mind?</p>
            <h2>Bring me the idea.<br>We can shape what it needs.</h2>
            <p class="lede">A campaign, a service, a system or a creative collaboration. Tell me what you want people to be able to do.</p>
            <div class="creation-story__closing-actions"><a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Start a conversation</a><a class="link" href="{{ route('creations') }}">Explore the other creations</a></div>
        </div>
    </section>
</article>
