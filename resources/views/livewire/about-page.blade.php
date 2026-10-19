<div class="reference-site reference-about">
    @include('livewire.partials.reference-header', ['current' => 'about'])

    <main>
        <section class="reference-hero reference-hero-impact">
            <div class="reference-hero-art" style="--reference-hero-image: url('{{ asset('assets/img/generated/home-hero-reference.png') }}')"></div>
            <div class="reference-wrap reference-hero-content">
                <p class="reference-kicker">PEOPLE <span>×</span> AI <span>×</span> A BRIGHTER TOMORROW</p>
                <h1>Ideas into<br><em>Real Impact.</em></h1>
                <p class="reference-hero-copy">I help individuals, teams and organisations understand and use AI — not just to be efficient, but to create a better, more meaningful future.</p>
                <div class="reference-actions"><a href="{{ route('work') }}" class="reference-button reference-button-dark">Explore My Work <span>→</span></a><a href="#story" class="reference-button reference-button-light"><b>▷</b> Watch My Story</a></div>
                <div class="reference-signature">Saiffil Fariz<small>SPEAKER · PRACTITIONER · LIFELONG LEARNER</small></div>
                <span class="reference-handnote reference-note-hero">A more capable<br>Malaysia.<br>That’s the dream.</span>
                <span class="reference-play-note"><b>▷</b> PLAY<br><small>1-MIN INTRO</small></span>
            </div>
        </section>

        <section class="reference-pillar-strip">
            <div class="reference-wrap reference-pillar-strip-grid">
                @foreach ([['⌘', 'CODE', 'Build systems<br>that work'], ['▥', 'COMMERCE', 'Turn ideas into<br>sustainable business'], ['♧', 'INFLUENCE', 'Share, speak,<br>move people'], ['▢', 'EDUCATION', 'Make AI practical<br>for everyone'], ['⌁', 'CHARACTER', 'Do good.<br>Stay grounded.']] as $pillar)
                    <article><span class="reference-strip-icon">{{ $pillar[0] }}</span><strong>{{ $pillar[1] }}</strong><p>{!! $pillar[2] !!}</p></article>
                @endforeach
            </div>
        </section>

        <section id="story" class="reference-split-section reference-why-section">
            <div class="reference-split-copy reference-wrap-copy">
                <p class="reference-kicker reference-kicker-green">WHY I DO THIS</p>
                <h2>Because<br><em>Potential</em><br>Deserves a Chance.</h2>
                <p>I’ve seen how technology can open doors — for individuals, for businesses, and for Malaysia. My mission is simple: make AI practical, accessible and useful to as many people as possible.</p>
                <a href="{{ route('story') }}" class="reference-text-link">Read My Story <span>→</span></a>
            </div>
            <div class="reference-split-image" style="--reference-image: url('{{ asset('assets/img/generated/purpose-mountain-reference.png') }}')"><span class="reference-handnote">Same curiosity.<br>Bigger purpose.</span></div>
        </section>

        <section class="reference-work-section">
            <div class="reference-wrap">
                <p class="reference-kicker reference-kicker-green">WHAT I DO</p>
                <h2>From Learning<br>to <em>Real-World Results.</em></h2>
                <span class="reference-handnote reference-note-work">Different rooms.<br>Same mission —<br>more capable people.</span>
                <div class="reference-service-grid">
                    <article><img src="{{ asset('assets/img/generated/work-large-audience.jpg') }}" alt="Saiffil speaking to an audience"><div class="reference-service-body"><span class="reference-service-icon">◉</span><h3>SPEAKING</h3><p>Keynotes and talks that simplify AI and spark action.</p><a href="{{ route('speaking') }}" class="reference-text-link">Invite Me <span>→</span></a></div></article>
                    <article><img src="{{ asset('assets/img/generated/program-teams-reference.png') }}" alt="A practical AI workshop"><div class="reference-service-body"><span class="reference-service-icon">♧</span><h3>PROGRAMS</h3><p>Hands-on masterclasses, corporate training and AI labs.</p><a href="{{ route('speaking') }}" class="reference-text-link">View Programs <span>→</span></a></div></article>
                    <article><img src="{{ asset('assets/img/generated/program-brand-reference.png') }}" alt="A laptop on a creative desk"><div class="reference-service-body"><span class="reference-service-icon">⌘</span><h3>CONSULTING</h3><p>Practical guidance for teams and organisations.</p><a href="{{ route('contact') }}" class="reference-text-link">Start a Conversation <span>→</span></a></div></article>
                </div>
            </div>
        </section>

        <section class="reference-quote-section" style="--reference-image: url('{{ asset('assets/img/generated/purpose-mountain-reference.png') }}')">
            <div class="reference-wrap reference-quote-content"><p>“Technology is a multiplier.<br><em>But people give it meaning.”</em></p><small>— Saiffil Fariz</small></div><span class="reference-handnote">A more capable<br>Malaysia.<br>It starts with you.</span>
        </section>

        <section class="reference-cta-panel" style="--reference-image: url('{{ asset('assets/img/generated/home-cta-reference.png') }}')">
            <div class="reference-wrap reference-cta-content"><p class="reference-kicker reference-kicker-green">LET’S BUILD WHAT’S NEXT</p><h2>Ready to explore <em>what’s possible</em><br>with AI?</h2><p>Let’s talk — about ideas, opportunities, or how I can help your team move forward.</p><div class="reference-actions"><a href="{{ route('contact') }}" class="reference-button reference-button-dark">Get in Touch <span>→</span></a><a href="#" class="reference-button reference-button-light">▣ &nbsp; View My Calendar</a></div></div><blockquote>“The future belongs to<br>those who keep learning,<br>building and helping others.”<small>— SAIFFIL FARIZ</small></blockquote>
        </section>
    </main>

    @include('livewire.partials.reference-footer')
</div>
