<footer class="site-footer">
    <div class="wrap">
        <div class="footer-intro">
            <p>Independent mind.<br><em>Connected worlds.</em></p>
            <a class="footer-contact" href="mailto:{{ config('site.contact.email') }}">
                Start a conversation <span aria-hidden="true">↗</span>
            </a>
        </div>
        <div class="footer-grid">
            <div class="footer-brand">
                <a class="brand" href="{{ route('home') }}" aria-label="Saiffil Fariz">
                    <span class="brand__name">saiffilfariz<span aria-hidden="true">.</span></span>
                </a>
                <p>{{ config('site.positioning.bio') }} I live in {{ config('site.contact.city') }}.</p>
            </div>

            <div>
                <h4>Pages</h4>
                <a href="{{ route('story') }}">About me</a>
                <a href="{{ route('work') }}">Work with me</a>
                <a href="{{ route('creations') }}">Creations</a>
                <a href="{{ route('writing') }}">Writing</a>
            </div>

            <div>
                <h4>Services</h4>
                @foreach (config('site.services') as $serviceRoute => $service)
                    <a href="{{ route($serviceRoute).($service['anchor'] ? '#'.$service['anchor'] : '') }}">{{ $service['action'] }}</a>
                @endforeach
            </div>

            <div>
                <h4>Topics in my writing</h4>
                @foreach (config('site.pillars') as $pillar)
                    <a href="{{ route('pillar', $pillar['slug']) }}">{{ $pillar['name'] }}</a>
                @endforeach
            </div>
        </div>

        <div class="footer-base">
            <span>&copy; {{ date('Y') }} Saiffil Fariz</span>
            <a href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>
            <nav class="footer-socials" aria-label="Social media">
                @foreach (config('site.socials') as $social)
                    <a class="footer-socials__link" href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="Follow me on {{ $social['label'] }}" title="{{ $social['label'] }}" data-platform="{{ strtolower($social['label']) }}">
                        <img src="{{ asset($social['icon']) }}" alt="" aria-hidden="true" width="26" height="26">
                    </a>
                @endforeach
            </nav>
        </div>
    </div>
</footer>
