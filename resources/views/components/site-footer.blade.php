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
                <p>I give talks, run training programmes and help teams use AI in their everyday work. I live in {{ config('site.contact.city') }}.</p>
            </div>

            <div>
                <h4>Pages</h4>
                <a href="{{ route('story') }}">About me</a>
                <a href="{{ route('work') }}">Work</a>
                <a href="{{ route('speaking') }}">Speaking</a>
                <a href="{{ route('talks') }}">Where I have spoken</a>
                <a href="{{ route('writing') }}">Writing</a>
            </div>

            <div>
                <h4>Work with me</h4>
                <a href="{{ route('speaking') }}#book">Invite me to speak</a>
                <a href="{{ route('programmes') }}">Join a programme</a>
                <a href="{{ route('consulting') }}">Help for your team</a>
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
        </div>
    </div>
</footer>
