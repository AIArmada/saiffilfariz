@php($concert = config('site.creations.concert'))

<article {{ $attributes->merge(['class' => 'concert-feature']) }}>
    <div class="concert-feature__main">
        <div class="concert-feature__copy">
            <p class="creation-context">Konsert KITA · Music &amp; digital experience</p>
            <h2>Feel the music.<br>Find your place.</h2>
            <p>I made the music and built the journey to the front row. Discover the concert, find your seat, add a keepsake and see your booking come together.</p>
            <a class="btn btn--primary" href="{{ route('creation', 'nusavue') }}#inside-experience">Explore the ticketing experience</a>
            <a class="concert-feature__story" href="{{ route('creation', 'konsert-kita') }}">The story behind the music</a>
        </div>
        <a class="concert-feature__visual" href="{{ route('creation', 'nusavue') }}#inside-experience" aria-label="Explore Nusavue: from the concert website to seat selection and the booking cart">
            <img class="concert-feature__event" src="{{ asset('images/projects/nusavue-event-desktop.jpg') }}" alt="Konsert KITA event experience" width="1440" height="900" loading="lazy">
            <img class="concert-feature__seats" src="{{ asset('images/projects/nusavue-seat-map-cart.jpg') }}" alt="Nusavue seat selection and booking cart" width="1440" height="2141" loading="lazy">
            <span class="concert-feature__invitation">Step inside the experience <span aria-hidden="true">↗</span></span>
        </a>
    </div>
    <div class="concert-feature__soundtrack">
        <img class="concert-feature__art" src="{{ asset($concert['artwork']) }}" alt="Konsert KITA: Suara Anti Buli concert artwork" width="2250" height="4000" loading="lazy">
        <div class="concert-feature__track"><p>The soundtrack to the same story</p><h3>{{ $concert['track'] }}</h3><span>Music by Saiffil Fariz · {{ $concert['duration'] }}</span></div>
        <div class="concert-feature__player">
            <img src="{{ asset($concert['waveform']) }}" alt="" width="750" height="80" aria-hidden="true">
            <audio controls preload="metadata" aria-label="Listen to {{ $concert['track'] }}, music by Saiffil Fariz for {{ $concert['name'] }}">
                <source src="{{ asset($concert['audio']) }}" type="audio/mpeg">
                <a href="{{ asset($concert['audio']) }}">Listen to {{ $concert['track'] }}</a>
            </audio>
        </div>
    </div>
</article>
