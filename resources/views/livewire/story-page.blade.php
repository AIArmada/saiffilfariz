<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">A story that starts in 1988</p>
                <h1>About me</h1>
                <p class="lede">My first contact with technology was a VTech Talking WhizKid in 1988. I went online in 1996. Today, I connect AI, business and people, helping them understand the tools and put them to use.</p>
            </div>
            <div class="phero__media">
                <x-photo name="story-present-portrait" alt="Portrait of Saiffil Fariz"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" />
            </div>
        </div>
    </section>

    <section class="strip">
        <div class="wrap strip__grid">
            @foreach (config('site.facts') as $fact)
                <div>
                    <b>{{ $fact['value'] }}</b>
                    <span>{{ $fact['label'] }}</span>
                    <small>{{ $fact['note'] }}</small>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section" id="first-contact">
        <div class="wrap split">
            <div class="origin-archive">
                <figure class="origin-photo">
                    <div class="origin-photo__image">
                        <x-photo name="story-vtech-whizkid-device-reference-v1"
                                 alt="VTech Talking WhizKid with its cream folding case, LCD screen, colourful keyboard and printed learning cards"
                                 sizes="(max-width: 390px) 80vw, 337px" />
                    </div>
                    <figcaption class="caption">
                        The Talking WhizKid, from <a href="https://www.hkexnews.hk/listedco/listconews/sehk/2026/0618/2026061800748.pdf#page=25" target="_blank" rel="noopener">VTech’s company archive</a>.
                        A reference example of the model I had.
                    </figcaption>
                </figure>
                <figure class="origin-reference">
                    <x-photo name="story-vtech-whizkid-box-reference-v1"
                             alt="Original boxed Talking Whiz-Kid in The Strong museum collection"
                             sizes="144px" />
                    <figcaption class="caption">
                        Original packaging, <a href="https://artsandculture.google.com/asset/electronic-learning-game-talking-whiz-kid-vtech/mQGp2kNwl067rQ?hl=en" target="_blank" rel="noopener">The Strong National Museum of Play</a>.
                        Gift of Sara Zielinski · object 116.4187.
                    </figcaption>
                </figure>
            </div>
            <div class="stack">
                <p class="label accent">1988 · The first encounter</p>
                <h2>It started with a Talking WhizKid.</h2>
                <p class="body">In 1988, I had a VTech Talking WhizKid. That was my first contact with technology, eight years before I went online.</p>
                <p class="body">It was a learning computer with a keyboard, a small LCD screen, a talking tutor and printed picture cards. Maths, spelling and music were things you could interact with.</p>
                <p class="body">Technology entered my life through a tool made for learning. Today, helping people learn to use technology is a large part of my work.</p>
                <p class="small origin-note">VTech introduced the Talking Whiz Kid in 1987. The year 1988 is when it became part of my story. <a href="https://www.vtech.com/en/about-us/history-milestones/" target="_blank" rel="noopener">VTech’s history</a> and the <a href="https://www.manualowl.com/m/Vtech/Talking-Whiz-Kid/Manual/197427" target="_blank" rel="noopener">original user manual</a> document the device.</p>
            </div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head head--wide">
                <h2>The short history</h2>
            </div>
            <div class="timeline timeline--six">
                @foreach ([
                    ['1988', 'First contact', 'A VTech Talking WhizKid was my first encounter with technology. A learning computer came before the internet.'],
                    ['1996', 'Going online', 'My first internet connection, on dial-up in Shah Alam. A new way to find information and connect with people.'],
                    ['2004', 'Building', 'Websites, servers and systems for clients. Work that had to keep running on Monday morning, not just look good in a demo.'],
                    ['2012', 'Business', 'Running a small company of my own. I learned where money and time actually go in a small team.'],
                    ['2020', 'Teaching', 'Weekly live sessions, workshops and guest lectures. A lot of it for people who had been told technology was not for them.'],
                    ['Today', 'Connecting the pieces', 'AI, business and people, brought together through talks, programmes and consulting. The work starts with what someone needs to learn or get done.'],
                ] as $chapter)
                    <div class="timeline__item">
                        <b>{{ $chapter[0] }}</b>
                        <h3>{{ $chapter[1] }}</h3>
                        <p>{{ $chapter[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrap--narrow stack">
            <h2>From learning to building</h2>
            <p class="body">The internet came next, in 1996. Then came websites and systems, running a business, and teaching in classrooms, workshops and boardrooms.</p>
            <p class="body">Working across those settings taught me to look beyond the tool. A system has to work for the people using it. A business has to make the time and cost worthwhile. A class has to leave someone able to do something.</p>
            <p class="body">That is how I approach AI today. Start with real work, explain the tools clearly, and help people build enough understanding to carry on for themselves.</p>
        </div>
    </section>

    <section class="band">
        <div class="band__media">
            <x-photo name="story-reflective-closing" alt="Saiffil looking out over a city at dusk"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy">
            <h2>Why I start with people</h2>
            <p class="body">Most technology projects I have seen go wrong did not fail because of the software. They failed because nobody agreed on what done looks like, nobody owned the work after launch, or the people who had to use it were never asked.</p>
            <p class="body">That is why my first questions are always about the work, not the tool. What are you trying to get done? Who does it now? What part of it wastes their time? Once those answers are clear, choosing tools gets much easier.</p>
        </div>
    </section>

    <section class="section">
        <div class="wrap split split--top">
            <div class="stack">
                <h2>Outside work</h2>
                <p class="body">Work is only part of my life. These are the other parts, in no particular order.</p>
                <a class="link" href="{{ route('writing') }}">Read my writing</a>
            </div>
            <dl class="kv">
                <div>
                    <dt>Based in</dt>
                    <dd>Shah Alam, Malaysia</dd>
                </div>
                <div>
                    <dt>Family</dt>
                    <dd>Married, with two boys. They think my job is mostly talking, and they are not far wrong.</dd>
                </div>
                <div>
                    <dt>Reading</dt>
                    <dd>History, mostly. People change slower than technology does.</dd>
                </div>
                <div>
                    <dt>Still true</dt>
                    <dd>I am still learning. There is always another tool to understand, and another way to make it useful.</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="cta" id="connect">
        <div class="wrap cta__inner">
            <h2>Get in touch</h2>
            <p class="lede">Planning a talk, a class or a project? Or you just have a question about using AI in your work? Send me an email. I read everything myself and I usually reply within two working days.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('speaking') }}#book">Invite me to speak</a>
            </div>
        </div>
    </section>
</div>
