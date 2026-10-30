<x-slot:title>Let’s talk | Saiffil Fariz</x-slot:title>
<x-slot:description>Speaking, AI programmes, consulting, custom software and creative collaborations. Explore how Saiffil Fariz connects AI, business and people to make useful work happen.</x-slot:description>

<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Bring the challenge. We will find the right approach.</p>
                <h1>Let’s talk</h1>
                <p class="lede">Help your people understand AI, improve the way your team works, build a useful product or bring a creative idea to life. We can start wherever you need me most.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="#ways-to-work">Ways to work together</a>
                    <a class="btn btn--ghost" href="{{ route('creations') }}">Explore my creations</a>
                </div>
            </div>
            <div class="phero__media">
                <x-photo name="profile-bluevest" alt="Saiffil Fariz in a blue vest, ready to talk"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" class="cutout-top" />
            </div>
        </div>
    </section>

    <section class="section" id="ways-to-work" aria-labelledby="work-options-heading">
        <div class="wrap">
            <div class="head">
                <h2 id="work-options-heading">Ways to work together</h2>
                <p class="body">Pick whichever is closest to what you need. We can always change direction after the first call.</p>
            </div>
            <div class="grid grid--2">
                @foreach (config('site.services') as $serviceRoute => $service)
                    <article class="card" wire:key="work-service-{{ $serviceRoute }}">
                        <div class="card__media {{ isset($service['screenshot']) ? 'card__media--screen' : '' }}">
                            @if (isset($service['screenshot']))
                                <img src="{{ asset($service['screenshot']) }}" alt="{{ $service['alt'] }}" width="1200" height="850" loading="lazy">
                            @else
                                <x-photo :name="$service['image']" :alt="$service['alt']"
                                         sizes="(max-width: 620px) 100vw, 50vw" />
                            @endif
                        </div>
                        <div class="card__body">
                            <p class="small">{{ $service['meta'] }}</p>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                            <div class="card__foot">
                                <a class="link" href="{{ route($serviceRoute) }}">{{ $service['cta'] }}</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--tight section--muted" aria-labelledby="creative-services-heading">
        <div class="wrap split">
            <div class="stack"><h2 id="creative-services-heading">Have a creative brief?</h2><p class="body">I also make music and corporate films. If your idea needs sound, a story or a digital experience, we can shape the right combination.</p></div>
            <div class="stack"><a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}?subject=Creative%20collaboration">Discuss a creative collaboration</a><br><a class="link" href="{{ route('creations') }}">Experience the creations</a></div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>How working with me goes</h2>
                <p class="body">A one-hour talk and a two-month project follow the same shape. You will always know what happens next and what it costs before we start.</p>
            </div>
            <div class="steps">
                @foreach ([
                    ['Talk', 'We start with a short call about what you want to get done. No slides. If I am not the right person, I will say so on that call.'],
                    ['Agree', 'You get a one-page note with what we will do, who is involved, the price and the dates. Nothing is booked until you agree to it.'],
                    ['Do the work', 'The talk, the programme, the process or the software, shaped around your own material and your own people.'],
                    ['Hand over', 'You keep the material, documentation and any source code, with a clear handover your team can use.'],
                ] as $index => $step)
                    <div class="steps__item">
                        <b>{{ $index + 1 }}</b>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="band">
        <div class="band__media">
            <x-photo name="work-training-room" alt="A training room mid-workshop"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy">
            <h2>What success looks like</h2>
            <p class="body">A session has to help people act after the room empties. A system has to make a real task easier after launch. I look for changes people can point to: a clearer decision, a faster process or a customer who can finish what they came to do.</p>
            <p class="body">That is why learning, software and consulting all end with a clear next step and someone on your team who can own it.</p>
        </div>
    </section>

    <section class="cta">
        <div class="wrap cta__inner">
            <h2>Get in touch</h2>
            <p class="lede">{{ config('site.contact.invitation') }}</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('story') }}">About me</a>
            </div>
        </div>
    </section>
</div>
