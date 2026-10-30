<section {{ $attributes->merge(['class' => 'section section--tight section--muted']) }}>
    <div class="wrap build-teaser">
        <div class="build-teaser__copy">
            <p class="build-kicker">Software &amp; systems</p>
            <h2>I build the part your idea needs next.</h2>
            <p class="body">
                The website is only the start. I build the platforms, workflows and integrations that make the whole experience work for people.
            </p>
            <a class="btn btn--primary" href="{{ route('creations') }}#websites">Explore the website projects</a>
            <a class="link" href="{{ route('build') }}">Have a website or system built</a>
            <p class="caption">Four live projects. Four very different jobs.</p>
        </div>
        <div class="build-teaser__visual" aria-label="Screenshots of selected software projects">
            <a class="build-teaser__featured" href="{{ route('creation', 'ikon') }}" aria-label="Explore the IKON Aspirasi Pahang project">
                <img src="{{ asset('images/projects/ikon.jpg') }}" alt="IKON Aspirasi Pahang campaign website screenshot" width="1200" height="850" loading="lazy">
            </a>
            <div class="build-teaser__stack">
                <a href="{{ route('creation', 'zunita') }}" aria-label="See the DUN Pilah project">
                    <img src="{{ asset('images/projects/zunita.jpg') }}" alt="DUN Pilah website screenshot" width="1200" height="850" loading="lazy">
                </a>
                <a href="{{ route('creation', 'ilmu360') }}" aria-label="See the ilmu360° project">
                    <img src="{{ asset('images/projects/ilmu360.jpg') }}" alt="ilmu360° event discovery platform screenshot" width="1200" height="850" loading="lazy">
                </a>
                <a href="{{ route('creation', 'kod') }}" aria-label="See the KOD project">
                    <img src="{{ asset('images/projects/kod.jpg') }}" alt="KOD digital action system screenshot" width="1200" height="850" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</section>
