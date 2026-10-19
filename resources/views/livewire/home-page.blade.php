<div class="site-shell" x-data>
    <div class="scroll-progress" aria-hidden="true"></div>

    <header class="site-header" x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 20" :class="{ 'is-scrolled': scrolled }">
        <div class="page-width header-inner">
            <a href="#top" class="brand" wire:click="closeMenu" aria-label="Saiffil Fariz home">
                <span class="brand-script">Saiffil</span>
                <span class="brand-name">SAIFFIL FARIZ</span>
            </a>

            <nav class="desktop-nav" aria-label="Primary navigation">
                <a class="active" href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('work') }}">Work</a>
                <a href="{{ route('speaking') }}">Speaking</a>
                <a href="{{ route('speaking') }}#programs">Programs</a>
                <a href="{{ route('blog') }}">Blog</a>
            </nav>

            <a href="#connect" class="button button-dark header-cta">Let’s Connect <span>→</span></a>
            <button type="button" class="menu-button" wire:click="toggleMenu" :aria-expanded="$wire.menuOpen.toString()" aria-controls="mobile-menu">
                <span></span><span></span>
                <span class="sr-only">Toggle menu</span>
            </button>
        </div>

        <div id="mobile-menu" class="mobile-menu" @class(['is-open' => $menuOpen])>
            <a href="{{ route('home') }}" wire:click="closeMenu">Home</a>
            <a href="{{ route('about') }}" wire:click="closeMenu">About</a>
            <a href="{{ route('work') }}" wire:click="closeMenu">Work</a>
            <a href="{{ route('speaking') }}" wire:click="closeMenu">Speaking</a>
            <a href="{{ route('speaking') }}#programs" wire:click="closeMenu">Programs</a>
            <a href="{{ route('blog') }}" wire:click="closeMenu">Blog</a>
            <a href="#connect" wire:click="closeMenu" class="button button-dark">Let’s Connect <span>→</span></a>
        </div>
    </header>

    <main id="top">
        <section class="hero-section" aria-labelledby="hero-title">
            <div class="hero-art" aria-hidden="true"></div>
            <div class="page-width hero-layout">
                <div class="hero-copy reveal-on-load">
                    <p class="eyebrow">AI · BUSINESS · PEOPLE · A BETTER TOMORROW</p>
                    <h1 id="hero-title">A More<br>Capable You<br><em>for a Bigger Tomorrow.</em></h1>
                    <p class="hero-lede">I help individuals and organisations make sense of AI, turn ideas into real value, and move forward with clarity, confidence and action.</p>
                    <div class="hero-actions">
                        <a href="#connect" class="button button-dark">Explore My Work <span>→</span></a>
                        <a href="#purpose" class="button button-light"><span class="play-icon">▶</span> Watch My Story</a>
                    </div>
                    <div class="learner-proof">
                        <div class="avatar-stack" aria-hidden="true">
                            <span>AR</span><span>KA</span><span>NH</span><span>JM</span><span>SF</span>
                        </div>
                        <div><strong>10,000+ learners</strong><small>Individuals · Teams · Organisations</small></div>
                    </div>
                </div>
                <div class="hero-side-note handwritten">Better<br>People<br>Better Systems<br>A Kinder Future</div>
                <div class="hero-paper-note handwritten" aria-label="Ideas, execution, impact — Saiffil">Ideas<br>Execution.<br>Impact<br>— Saiffil</div>
                <div class="hero-location"><span class="location-dot"></span><span>Shah Alam, Malaysia<br><small>Working on what matters.</small></span></div>
            </div>
        </section>

        <section id="purpose" class="purpose-section section-white">
            <div class="purpose-image image-frame reveal-on-scroll">
                <img src="{{ asset('assets/img/generated/purpose-mountain-reference.png') }}" alt="A person with a backpack looking over a mountain valley">
                <span class="handwritten image-note">Same<br>Curiosity.<br>Bigger<br>Possibilities.</span>
            </div>
            <div class="purpose-copy section-pad reveal-on-scroll">
                <p class="eyebrow eyebrow-blue">MY PURPOSE</p>
                <h2>Technology is a tool.<br>People are the point.</h2>
                <p class="body-copy">I believe AI should make life better — not more complicated. My work is about helping people learn, apply and benefit from technology in practical, meaningful ways.</p>
                <div class="purpose-points">
                    <article><span class="purpose-icon purpose-icon-lamp" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M9 18h6M10 21h4M8.5 14.5a6 6 0 1 1 7 0c-.9.7-1.5 1.6-1.5 2.5h-4c0-.9-.6-1.8-1.5-2.5Z"/></svg></span><h3>Simplify</h3><p>Make complex ideas simple</p></article>
                    <article><span class="purpose-icon purpose-icon-people" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><circle cx="9" cy="9" r="3"/><circle cx="16.5" cy="10" r="2.5"/><path d="M3.5 19c.5-3 2.2-4.5 5.5-4.5s5 1.5 5.5 4.5M14 15.5c2.7-.3 4.7.8 5.5 3.5"/></svg></span><h3>Empower</h3><p>Give people practical skills and confidence</p></article>
                    <article><span class="purpose-icon purpose-icon-impact" aria-hidden="true"><svg viewBox="0 0 24 24" focusable="false"><path d="M4 19V5M4 19h16M7 15l3-4 3 2 5-7M15 6h3v3"/></svg></span><h3>Create Impact</h3><p>Turn knowledge into real results</p></article>
                </div>
            </div>
        </section>

        <section id="pillars" class="pillars-section section-white section-border">
            <div class="page-width pillars-layout">
                <div class="pillars-intro section-pad-left reveal-on-scroll">
                    <p class="eyebrow eyebrow-blue">THE FIVE PILLARS</p>
                    <h2>A balanced life.<br>A bigger impact.</h2>
                    <p class="body-copy">These five pillars guide what I do, how I work, and the kind of future I want to build — for myself, my family, and the wider community.</p>
                </div>
                <div class="pillar-grid">
                    <article class="pillar-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/pillar-code-reference.png') }}" alt="A laptop displaying code"><div><h3>Code</h3><p>Build, automate, solve.</p></div></article>
                    <article class="pillar-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/pillar-commerce-reference.png') }}" alt="Kuala Lumpur skyline at golden hour"><div><h3>Commerce</h3><p>Create value, grow opportunity.</p></div></article>
                    <article class="pillar-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/pillar-influence-reference.png') }}" alt="A speaker on a purple-lit stage"><div><h3>Influence</h3><p>Share, inspire, move people.</p></div></article>
                    <article class="pillar-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/pillar-education-reference.png') }}" alt="A stack of books in soft light"><div><h3>Education</h3><p>Learn, teach, lift others.</p></div></article>
                    <article class="pillar-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/pillar-character-reference.png') }}" alt="A large tree in a sunlit landscape"><div><h3>Character</h3><p>Do what is right, always.</p></div></article>
                </div>
            </div>
        </section>

        <section id="journal" class="journey-section section-white section-border">
            <div class="page-width journey-layout">
                <div class="journey-intro section-pad-left reveal-on-scroll">
                    <p class="eyebrow eyebrow-blue">THE JOURNEY</p>
                    <h2>From a curious<br>kid to a lifelong<br>learner.</h2>
                    <p class="body-copy">It started with a computer, a lot of curiosity and a belief that technology can create a better life. The journey continues...</p>
                </div>
                <div class="timeline-wrap reveal-on-scroll">
                    <div class="timeline-line"></div>
                    <div class="timeline-item"><span class="timeline-dot"></span><strong>1996</strong><h3>First website</h3><p>A curious kid with an internet connection.</p></div>
                    <div class="timeline-item"><span class="timeline-dot"></span><strong>2004</strong><h3>Server ops</h3><p>Learning, breaking, fixing, and growing through real experience.</p></div>
                    <div class="timeline-item"><span class="timeline-dot"></span><strong>Business</strong><h3>Building companies</h3><p>Turning ideas into real-world solutions.</p></div>
                    <div class="timeline-item"><span class="timeline-dot"></span><strong>Today</strong><h3>AI for a bigger tomorrow</h3><p>Sharing what I’ve learned to help more people go further, faster.</p></div>
                    <span class="handwritten timeline-note">Still<br>Curious.<br>Still<br>Building.</span>
                </div>
            </div>
        </section>

        <section id="programs" class="programs-section section-white section-border">
            <div class="page-width programs-layout">
                <div class="programs-intro section-pad-left reveal-on-scroll">
                    <p class="eyebrow eyebrow-blue">FEATURED PROGRAMS</p>
                    <h2>Practical AI.<br>Real Results.</h2>
                    <p class="body-copy">Hands-on learning experiences for individuals, teams and organisations who want to stay ahead in the AI era.</p>
                    <a href="#connect" class="text-link">View All Programs <span>→</span></a>
                </div>
                <div class="program-grid">
                    <article class="program-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/program-awakening-reference.png') }}" alt="A face illuminated by blue digital light"><div class="program-card-body"><p class="program-meta">4–5 JUNE 2026</p><h3>AI Awakening<br><span>Masterclass</span></h3><p>Understand. Apply. Move Forward.</p><button type="button" aria-label="Learn more about AI Awakening">↗</button></div></article>
                    <article class="program-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/program-brand-reference.png') }}" alt="A laptop and creative desk in warm light"><div class="program-card-body"><p class="program-meta">16 JUNE 2026</p><h3>AI Brand<br><span>Makeover 101</span></h3><p>Build a stronger brand with AI.</p><button type="button" aria-label="Learn more about AI Brand Makeover 101">↗</button></div></article>
                    <article class="program-card reveal-on-scroll"><img src="{{ asset('assets/img/generated/program-teams-reference.png') }}" alt="A team workshop with a presentation screen"><div class="program-card-body"><p class="program-meta">FOR ORGANISATIONS</p><h3>AI for Teams<br><span>&amp; Leaders</span></h3><p>Custom training for your organisation.</p><button type="button" aria-label="Learn more about AI for Teams and Leaders">↗</button></div></article>
                </div>
            </div>
        </section>

        <section class="tomorrow-section section-white">
            <div class="tomorrow-image image-frame reveal-on-scroll"><img src="{{ asset('assets/img/generated/home-beach-reference.png') }}" alt="Two boys running through the sea at sunset"><span class="handwritten image-note tomorrow-note">For my sons,<br>and a brighter<br>tomorrow.</span></div>
            <div class="tomorrow-copy section-pad reveal-on-scroll"><p class="eyebrow eyebrow-blue">BEYOND WORK</p><h2>A Better Tomorrow<br>Starts with Us.</h2><p class="body-copy">Everything I do is also for my family, my community and the next generation — so they can inherit a world with more opportunity, not more problems.</p><a href="#connect" class="button button-outline-blue">Read My Story <span>→</span></a></div>
        </section>

        <section class="testimonials-section section-white section-border">
            <div class="page-width testimonials-layout">
                <div class="testimonials-intro section-pad-left reveal-on-scroll"><p class="eyebrow eyebrow-blue">KIND WORDS</p><h2>Real People.<br>Real Impact.</h2><p class="body-copy">From students and professionals to business leaders — here’s what they say about the journey.</p><div class="slider-controls"><button wire:click="previousTestimonial" aria-label="Previous testimonial">←</button><span class="slider-dots" aria-label="Testimonial {{ $activeTestimonial + 1 }} of 3"><i class="{{ $activeTestimonial === 0 ? 'is-active' : '' }}"></i><i class="{{ $activeTestimonial === 1 ? 'is-active' : '' }}"></i><i class="{{ $activeTestimonial === 2 ? 'is-active' : '' }}"></i></span><button wire:click="nextTestimonial" aria-label="Next testimonial">→</button></div></div>
                <div class="testimonial-grid">
                    @foreach ($testimonials as $index => $testimonial)
                        <article class="testimonial-card {{ $testimonial['tone'] }} {{ $activeTestimonial === $index ? 'is-featured' : '' }}" wire:key="testimonial-{{ $index }}">
                            <span class="quote-mark">“</span><blockquote>{{ $testimonial['quote'] }}</blockquote><div class="testimonial-person"><span class="person-avatar">{{ collect(explode(' ', $testimonial['name']))->map(fn ($part) => substr($part, 0, 1))->join('') }}</span><span><strong>{{ $testimonial['name'] }}</strong><small>{{ $testimonial['role'] }}</small></span></div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="connect" class="connect-section">
            <div class="connect-background"></div>
            <div class="page-width connect-content reveal-on-scroll"><p class="eyebrow">LET’S CREATE A BRIGHTER TOMORROW</p><h2>Ideas are better<br>when shared.</h2><p>Have a question, an idea, or want to work together?<br>I’d love to hear from you.</p><div class="hero-actions"><a href="mailto:hello@saiffilfariz.com" class="button button-dark">Let’s Connect <span>→</span></a><a href="#journal" class="button button-light">Follow My Journey</a></div></div><span class="handwritten connect-note">Same<br>Sky<br>Bigger<br>Possibilities.</span>
        </section>
    </main>

    <footer class="site-footer">
        <div class="page-width footer-inner">
            <div><div class="footer-script">Saiffil Fariz</div><p>Technologist. Educator. Speaker. Lifelong Learner.</p></div>
            <nav aria-label="Footer navigation"><a href="#top">Home</a><a href="#purpose">About</a><a href="#journal">Blog</a><a href="#connect">Contact</a><span class="social-link social-youtube" aria-label="YouTube">▶</span><span class="social-link" aria-label="LinkedIn">in</span><span class="social-link social-instagram" aria-label="Instagram">◎</span><a href="#top" class="back-to-top">↑</a></nav>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const progress = document.querySelector('.scroll-progress');
            const revealItems = document.querySelectorAll('.reveal-on-scroll');
            const updateProgress = () => {
                const max = document.documentElement.scrollHeight - window.innerHeight;
                if (progress) progress.style.transform = `scaleX(${max > 0 ? window.scrollY / max : 0})`;
            };
            window.addEventListener('scroll', updateProgress, { passive: true });
            updateProgress();
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => entries.forEach((entry) => {
                    if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
                }), { rootMargin: '0px 0px -10% 0px', threshold: 0.08 });
                revealItems.forEach((item) => observer.observe(item));
            } else { revealItems.forEach((item) => item.classList.add('is-visible')); }
        });
    </script>
</div>
