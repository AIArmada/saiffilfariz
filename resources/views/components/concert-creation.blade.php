@props(['compact' => false])
@php($concert = config('site.creations.concert'))

<article {{ $attributes->class(['concert-creation', 'concert-creation--compact' => $compact]) }}>
    <figure class="concert-creation__art">
        <img src="{{ asset($concert['artwork']) }}" alt="Konsert KITA: Suara Anti Buli concert artwork" width="2250" height="4000" loading="lazy">
        <figcaption>Concert artwork · {{ $concert['name'] }}</figcaption>
    </figure>
    <div class="concert-creation__body">
        <div class="concert-creation__intro">
            <p class="creation-context">Music + web · One connected project</p>
            <h2>{{ $compact ? 'An idea you can hear. A place to take part.' : 'A song to bring people together. A website to make it happen.' }}</h2>
            <p>I made “{{ $concert['track'] }}” for the anti-bullying concert, and built its promotional and ticketing website. Two different ways to help the same cause reach people.</p>
        </div>

        <div class="creation-audio">
            <div class="creation-audio__heading">
                <div><span>Listen to the music</span><h3>{{ $concert['track'] }}</h3></div>
                <span class="creation-audio__duration">{{ $concert['duration'] }}</span>
            </div>
            <img class="creation-audio__wave" src="{{ asset($concert['waveform']) }}" alt="" width="750" height="80" aria-hidden="true">
            <audio controls preload="metadata" aria-label="Listen to {{ $concert['track'] }}, music by Saiffil Fariz for {{ $concert['name'] }}">
                <source src="{{ asset($concert['audio']) }}" type="audio/mpeg">
                <a href="{{ asset($concert['audio']) }}">Listen to {{ $concert['track'] }}</a>
            </audio>
            <p class="creation-audio__credit">Created by Saiffil Fariz for {{ $concert['name'] }} · {{ $concert['subtitle'] }}</p>
        </div>

        @if ($compact)
            <div class="concert-creation__links">
                <a class="link" href="{{ route('creation', 'konsert-kita') }}">Read the Konsert KITA story</a>
                <span>Music, websites and what comes next.</span>
            </div>
        @else
            <div class="concert-creation__web">
                <div><h3>The other side of the project</h3><p>Concert promotion &amp; ticketing website</p></div>
                <a href="{{ $concert['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="Explore the Nusavue concert website (opens in a new tab)">
                    <img src="{{ asset($concert['screenshot']) }}" alt="Local preview of the Konsert KITA promotional website, showing concert information and a ticketing call to action" width="1200" height="850" loading="lazy">
                    <span>Explore Nusavue <span aria-hidden="true">↗</span></span>
                </a>
                <p class="caption">Website preview captured from my local project. <a href="{{ route('build') }}">Have a website or system built</a>.</p>
                <p class="caption"><a href="{{ route('creation', 'konsert-kita') }}">Read the story behind the music and digital experience</a></p>
            </div>
        @endif
    </div>
</article>
