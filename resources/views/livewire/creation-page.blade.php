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
                    <div class="creation-story__hero-actions">
                        <a class="btn btn--primary" href="{{ $creation['url'] }}" target="_blank" rel="noopener noreferrer">{{ $creation['url_label'] }} <span aria-hidden="true">↗</span></a>
                        <a class="link" href="{{ route('build') }}">Build a website or system with me</a>
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

    @if (isset($creation['screenshots']))
        <section class="creation-story__screens" aria-labelledby="creation-story-screens-heading">
            <div class="wrap">
                <div class="creation-story__section-head">
                    <p class="creation-context">Inside the experience</p>
                    <h2 id="creation-story-screens-heading">A ticket journey with nowhere to drop the thread.</h2>
                </div>
                <div class="creation-story__screens-grid">
                    @foreach ($creation['screenshots'] as $screenshot)
                        <figure class="creation-story__screen{{ ! empty($screenshot['tall']) ? ' creation-story__screen--tall' : '' }}">
                            <div class="creation-story__screen-image">
                                <img src="{{ asset($screenshot['image']) }}" alt="{{ $screenshot['alt'] }}" width="{{ $screenshot['width'] }}" height="{{ $screenshot['height'] }}" loading="lazy">
                            </div>
                            <figcaption><h3>{{ $screenshot['title'] }}</h3><p>{{ $screenshot['text'] }}</p></figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

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
