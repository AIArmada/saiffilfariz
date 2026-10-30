<x-slot:description>
    The software side of connected intelligence. Saiffil Fariz builds websites, apps, custom systems, integrations and workflows around business needs and real people.
</x-slot:description>

<div class="build-page">
    <section class="build-opening">
        <div class="wrap build-opening__inner">
            <div class="build-opening__copy">
                <a class="crumb" href="{{ route('work') }}">Work together</a>
                <p class="build-kicker">Software &amp; systems</p>
                <h1>When the right tool doesn't exist, I build it.</h1>
                <p class="lede">
                    I bring a programmer's craft, business experience and an understanding of people to websites, apps, platforms and custom systems that help work move forward.
                </p>
                <div class="build-opening__actions">
                    <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Talk through an idea</a>
                    <a class="build-text-link" href="{{ route('creations') }}#websites">Explore website projects <span aria-hidden="true">↗</span></a>
                </div>
                <p class="build-opening__note">From a campaign people can vote in to a system that turns one word into action.</p>
            </div>

            <div class="build-opening__visual" aria-label="Selected work: IKON Aspirasi Pahang and ilmu360°">
                <figure class="build-opening__feature">
                    <a href="{{ route('creation', 'ikon') }}" aria-label="Read the IKON Aspirasi Pahang project story"><img src="{{ asset('images/projects/ikon.jpg') }}" alt="IKON Aspirasi Pahang campaign website with its public voting experience and finalist profiles" width="1200" height="850" fetchpriority="high"></a>
                </figure>
                <figure class="build-opening__overlay">
                    <a href="{{ route('creation', 'ilmu360') }}" aria-label="Read the ilmu360° project story"><img src="{{ asset('images/projects/ilmu360.jpg') }}" alt="ilmu360° event discovery page with gatherings, speakers and institutions" width="1200" height="850"></a>
                </figure>
                <a class="build-opening__stamp" id="selected-work" href="{{ route('creations') }}#websites"><div><b>Explore the creations</b><small>Website projects, music and more ↗</small></div></a>
            </div>
        </div>
    </section>

    <div class="build-signal" aria-label="How I work">
        <div class="wrap build-signal__inner">
            <span>Find the real problem</span><i></i><span>Shape the right product</span><i></i><span>Build it to work in real life</span>
        </div>
    </div>

    <section class="section build-capabilities section--ink">
        <div class="wrap build-capabilities__layout">
            <div class="build-capabilities__intro">
                <p class="build-kicker">Bring me the messy middle</p>
                <h2>If the process doesn't fit the tools, we can build a better fit.</h2>
                <p class="body">You don't need a finished brief. Bring the idea, the spreadsheet, the repeated hand-off or the customer journey that keeps breaking.</p>
            </div>
            <div class="build-capabilities__list">
                <article>
                    <h3>Launch a digital product</h3>
                    <p>Websites, campaign experiences, service portals and online products that turn a first visit into a clear next step.</p>
                </article>
                <article>
                    <h3>Make everyday work flow</h3>
                    <p>Custom applications, internal systems and automations shaped around the way your team actually works.</p>
                </article>
                <article>
                    <h3>Connect the things you already use</h3>
                    <p>Integrations that move information between tools and take repetitive steps off people's plates.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section build-approach">
        <div class="wrap">
            <div class="build-section-head">
                <p class="build-kicker">A clear path from idea to launch</p>
                <h2>A builder who can think it through, then make it work.</h2>
                <p class="body">You'll stay close to the important decisions. I'll take responsibility for making the product real and useful day to day.</p>
            </div>

            <ol class="build-approach__steps">
                <li><h3>Find the real problem</h3><p>Understand who needs help, what they are trying to do and where the current process gets stuck.</p></li>
                <li><h3>Shape the useful first version</h3><p>Make the key journey clear. Decide what belongs now and what can wait.</p></li>
                <li><h3>Build, connect and improve</h3><p>Launch the product, join up the tools it depends on and keep improving it against real use.</p></li>
            </ol>

            <aside class="build-ai-note">
                <div><p class="build-kicker">AI in the workflow</p><h3>Move faster. Keep a human accountable for what ships.</h3></div>
                <p>I use AI throughout exploration and implementation. I still own the product decisions, the system design, the integrations and the final quality of the work.</p>
            </aside>
        </div>
    </section>

    <section class="section build-creative-connection">
        <div class="wrap">
            <x-concert-creation />
        </div>
    </section>

    <section class="cta build-cta">
        <div class="wrap cta__inner">
            <p class="build-kicker">Have something worth making?</p>
            <h2>Let's make the right thing real.</h2>
            <p class="lede">Tell me what you'd like to change for your customers or your team. We can find the simplest useful first version and build from there.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Start a project conversation</a>
                <a class="btn btn--ghost" href="{{ route('work') }}">Other ways to work with me</a>
            </div>
        </div>
    </section>
</div>
