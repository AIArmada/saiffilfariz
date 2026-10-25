<x-slot:description>Music, websites, films and experiments by Saiffil Fariz. Listen to Kita Bersama and explore the connected creative and software work behind Konsert KITA.</x-slot:description>

<div class="creations-page">
    <section class="creations-opening">
        <div class="wrap creations-opening__inner">
            <div><p class="creation-context">Creations by Saiffil Fariz</p><h1>Ideas take<br>different forms.</h1></div>
            <div class="creations-opening__note">
                <p class="lede">A song. A film. A website. A little experiment that becomes something more.</p>
                <p>Client projects, personal experiments and hobbies, gathered in one place. Follow the connections, or enjoy each piece on its own.</p>
                <a class="link" href="#creation-gallery">Come and explore</a>
            </div>
        </div>
        <div class="wrap creations-opening__line"><span>For a brief.</span><span>For a cause.</span><span>For the joy of it.</span></div>
    </section>

    <section class="section creations-gallery" id="creation-gallery" aria-label="Explore creations" data-creation-gallery>
        <div class="wrap">
            <div class="creation-browser">
                <h2>Take a closer look.</h2>
                <div class="creation-filters" role="group" aria-label="Filter creations by medium" data-creation-filters hidden>
                    <button type="button" data-creation-filter="all" aria-pressed="true">All creations</button>
                    <button type="button" data-creation-filter="music" aria-pressed="false">Music</button>
                    <button type="button" data-creation-filter="web" aria-pressed="false">Websites &amp; systems</button>
                </div>
            </div>
            <p class="creation-result sr-only" role="status" aria-live="polite" data-creation-result></p>

            <div id="konsert-kita" data-creation data-creation-formats="music web">
                <x-concert-creation />
            </div>

            <div class="creation-web-heading" id="websites" data-creation-formats="web">
                <h2>Built to be explored.</h2>
                <p class="body">Different audiences, different needs. Explore each website and the purpose behind it.</p>
                <a class="link" href="{{ route('build') }}">Want something like this built?</a>
            </div>
            <div class="creation-web-grid">
                @foreach (config('site.creations.websites') as $creation)
                    <article class="creation-web" id="{{ $creation['slug'] }}" data-creation data-creation-formats="web" wire:key="creation-{{ $creation['slug'] }}">
                        <a class="creation-web__image" href="{{ route('creation', $creation['slug']) }}" aria-label="Read the {{ $creation['name'] }} project story">
                            <img src="{{ asset($creation['image']) }}" alt="{{ $creation['name'] }} website built by Saiffil Fariz" width="1200" height="850" loading="lazy">
                            <span aria-hidden="true">↗</span>
                        </a>
                        <div class="creation-web__copy"><p class="creation-context">{{ $creation['type'] }}</p><h3><a href="{{ route('creation', $creation['slug']) }}">{{ $creation['name'] }}</a></h3><p>{{ $creation['description'] }}</p><div class="creation-web__actions"><a class="link" href="{{ route('creation', $creation['slug']) }}">Read the project story</a><a class="creation-web__visit" href="{{ $creation['url'] }}" target="_blank" rel="noopener noreferrer">Visit website <span aria-hidden="true">↗</span></a></div></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="creation-closing">
        <div class="wrap">
            <h2>What could we<br>make together?</h2>
            <div><p class="lede">A story to tell, a song to shape, a digital experience to build. Tell me what you are imagining.</p><a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Start a creative conversation</a><a class="link" href="{{ route('work') }}">Other ways to work with me</a></div>
        </div>
    </section>
</div>
