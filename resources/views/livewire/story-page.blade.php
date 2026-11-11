<x-slot:description>Meet Saiffil Fariz: programmer, speaker, educator and creator connecting AI, business and people through software, learning, music and film.</x-slot:description>

<div class="v3-page v3-page--story">
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">A story that starts in 1989</p>
                <h1>A curious mind, through different chapters of life.</h1>
                <p class="lede">From a childhood curiosity about technology to building businesses, leading teams, learning and creating impact — this is the journey that shaped how I think and what I build today.</p>
            </div>
            <div class="phero__media phero__media--portrait">
                <x-photo name="saiffil-fariz-gold-portrait" alt="Saiffil Fariz in a metallic gold blazer"
                         sizes="(max-width: 720px) min(90vw, 440px), 440px" :eager="true" />
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

    <nav class="wrap chapter-rail" aria-label="On this page" data-chapter-rail>
        <a href="#first-contact">Start</a>
        <a href="#business">Business</a>
        <a href="#brand">Brand</a>
        <a href="#recognised">Recognition</a>
        <a href="#learning">Learning</a>
        <a href="#thinking">How I think</a>
    </nav>

    <section class="section" id="first-contact">
        <div class="wrap split">
            <div class="origin-archive">
                <figure class="origin-photo origin-photo--personal">
                    <div class="origin-photo__image">
                        <x-photo name="story-saiffil-whizkid-1989-v1"
                                 alt="Saiffil Fariz as a young boy sitting on the floor with a VTech Talking WhizKid, 1989"
                                 sizes="(max-width: 720px) 100vw, 552px" />
                    </div>
                    <figcaption class="caption">
                        Saiffil with the Talking WhizKid, 1989. The actual machine from this story.
                        Personal photograph.
                    </figcaption>
                </figure>
            </div>
            <div class="stack">
                <p class="label accent">1989 · The first encounter</p>
                <h2>It started with a Talking WhizKid.</h2>
                <p class="body">In 1989, I had a VTech Talking WhizKid. That was my first contact with technology, seven years before I went online.</p>
                <p class="body">It was a learning computer with a keyboard, a small LCD screen, a talking tutor and printed picture cards. Maths, spelling and music were things you could interact with.</p>
                <p class="body">Technology entered my life through a tool made for learning. Today, helping people learn to use technology is a large part of my work.</p>
                <p class="small origin-note">VTech introduced the Talking Whiz Kid in 1987. The year 1989 is when it became part of my story. <a href="https://www.vtech.com/en/about-us/history-milestones/" target="_blank" rel="noopener">VTech’s history</a> and the <a href="https://www.manualowl.com/m/Vtech/Talking-Whiz-Kid/Manual/197427" target="_blank" rel="noopener">original user manual</a> document the device.</p>
            </div>
        </div>
        <div class="wrap origin-references">
            <figure class="origin-reference">
                <x-photo name="story-vtech-whizkid-device-reference-v1"
                         alt="VTech Talking WhizKid with its cream folding case, LCD screen, colourful keyboard and printed learning cards"
                         sizes="120px" />
                <figcaption class="caption">
                    The Talking WhizKid, from <a href="https://www.hkexnews.hk/listedco/listconews/sehk/2026/0618/2026061800748.pdf#page=25" target="_blank" rel="noopener">VTech’s company archive</a>.
                    A reference example of the model.
                </figcaption>
            </figure>
            <figure class="origin-reference">
                <x-photo name="story-vtech-whizkid-box-reference-v1"
                         alt="Original boxed Talking Whiz-Kid in The Strong museum collection"
                         sizes="120px" />
                <figcaption class="caption">
                    Original packaging, <a href="https://artsandculture.google.com/asset/electronic-learning-game-talking-whiz-kid-vtech/mQGp2kNwl067rQ?hl=en" target="_blank" rel="noopener">The Strong National Museum of Play</a>.
                    Gift of Sara Zielinski · object 116.4187.
                </figcaption>
            </figure>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head head--wide">
                <h2>The short history</h2>
            </div>
            <div class="timeline timeline--six">
                @foreach ([
                    ['1989', 'First contact', 'A VTech Talking WhizKid was my first encounter with technology. A learning computer came before the internet.'],
                    ['1996', 'Going online', 'My first internet connection, on dial-up in Shah Alam. A new way to find information and connect with people.'],
                    ['2004', 'Building', 'Websites, servers and systems for clients. Work that had to keep running on Monday morning, not just look good in a demo.'],
                    ['2012', 'Business', 'Running Maxxima, the company behind CellMaxx. I learned where money and time actually go in a small team. <a class="link link--inline" href="#business">See what that built ↓</a>'],
                    ["2020", "Teaching", "Weekly live sessions, workshops and guest lectures. A lot of it for people who had been told technology was not for them. <a class=\"link link--inline\" href=\"" . route('speaking') . "\">Browse the sessions →</a>"],
                    ['Today', 'Connecting the pieces', 'AI, business and people, brought together through talks, programmes, consulting and software development. The work starts with what someone needs to learn, build or get done.'],
                ] as $chapter)
                    <div class="timeline__item">
                        <b>{{ $chapter[0] }}</b>
                        <h3>{{ $chapter[1] }}</h3>
                        <p>{!! $chapter[2] !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section" id="business" data-reveal>
        <div class="wrap split">
            <div class="stack">
                <p class="label accent">2017 · Brand execution</p>
                <h2>CellMaxx, in the sky.</h2>
                <p class="body">
                    CellMaxx was the product. Maxxima was the company. In 2017, I wrapped an
                    AirAsia aircraft in CellMaxx's brand — the product carried on a commercial
                    livery, not just a shelf.
                </p>
                <p class="body">
                    It is one proof point in a longer business story: what it took to build the
                    product, the company and the campaign around it.
                </p>
                <a class="link" href="https://www.youtube.com/watch?v=EP0mcsX4g_E"
                   target="_blank" rel="noopener">
                    Watch the 2017 film <span aria-hidden="true">↗</span>
                </a>
            </div>
            <figure class="story-proof">
                <x-photo name="proof-airasia-cellmaxx-tarmac"
                         alt="AirAsia aircraft with CellMaxx and Maxxima livery on the tarmac, 2017"
                         sizes="(max-width: 900px) 100vw, 50vw" />
                <figcaption class="caption">
                    AirAsia aircraft in CellMaxx livery, 2017. The brand on a commercial
                    aircraft, not just a shelf.
                </figcaption>
            </figure>
        </div>
        <div class="wrap">
            <p class="trail">The same product story, live in a room: <a class="link link--inline" href="{{ route('talk', 'ntw-2025-ai') }}">National Training Week 2025 →</a> <a class="link link--inline" href="{{ route('series', 'talk-with-ceo') }}">Talk With CEO, 72 sessions →</a></p>
        </div>
    </section>

    <section class="section section--tight" id="brand" data-reveal>
        <div class="wrap">
            <div class="head">
                <h2>The brand travelled.</h2>
                <p class="body">
                    The aircraft was the most visible surface. The same brand moved through
                    buses, a professional cycling team, a boxing ring and a charity campaign —
                    different formats, one system of attention.
                </p>
            </div>
            <div class="proof-gallery">
                <figure>
                    <x-photo name="proof-cellmaxx-bus"
                             alt="CellMaxx-branded express bus"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">CellMaxx bus branding.</figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-cellmaxx-jersey-saiffil"
                             alt="Saiffil Fariz wearing the CellMaxx Le Tour de Langkawi jersey"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">Le Tour de Langkawi 2017 team jersey.</figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-cellmaxx-boxing"
                             alt="The Roar of Singapore boxing poster presented by CellMaxx and Maxxima"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">The Roar of Singapore, 25 November 2017.</figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-maxxcare-50-senyuman"
                             alt="MaxxCare Foundation Projek 50 Senyuman poster"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">Projek 50 Senyuman, MaxxCare Foundation, 2019.</figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-cellmaxx-model"
                             alt="Model of the CellMaxx AirAsia aircraft"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">The campaign in miniature.</figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-cellmaxx-airport"
                             alt="Saiffil at the airport with the CellMaxx AirAsia aircraft below"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">At the airport with the aircraft.</figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-maxxima-hq"
                             alt="Saiffil at the Maxxima headquarters reception"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">At Maxxima HQ.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="section section--tight rule-top" id="recognised" data-reveal>
        <div class="wrap">
            <div class="head">
                <h2>The work was recognised.</h2>
                <p class="body">
                    Two letters from 2018, kept because they name the company, the product and
                    the work — not just the award.
                </p>
            </div>
            <div class="proof-docs">
                <article class="proof-doc">
                    <a class="proof-doc__thumb"
                       href="{{ asset('assets/img/opt/proof-letter-mfa-2018-02-14-529.webp') }}"
                       target="_blank" rel="noopener"
                       aria-label="Read the letter from the Deputy Minister of Foreign Affairs">
                        <x-photo name="proof-letter-mfa-2018-02-14"
                                 alt="Letter from the Deputy Minister of Foreign Affairs, 14 February 2018"
                                 sizes="120px" />
                    </a>
                    <div>
                        <p class="small">14 February 2018</p>
                        <h3>Deputy Minister of Foreign Affairs</h3>
                        <p>
                            Congratulates Maxxima Resources on the Golden Europe Award, the
                            ESQC Quality Achievements and the Summits of Leaders Oxford
                            recognition.
                        </p>
                        <a class="link"
                           href="{{ asset('assets/img/opt/proof-letter-mfa-2018-02-14-529.webp') }}"
                           target="_blank" rel="noopener">
                            Read the letter <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </article>
                <article class="proof-doc">
                    <a class="proof-doc__thumb"
                       href="{{ asset('assets/img/opt/proof-letter-kbs-2018-01-24-640.webp') }}"
                       target="_blank" rel="noopener"
                       aria-label="Read the letter from the Ministry of Youth and Sports">
                        <x-photo name="proof-letter-kbs-2018-01-24"
                                 alt="Letter from the Ministry of Youth and Sports, 24 January 2018"
                                 sizes="120px" />
                    </a>
                    <div>
                        <p class="small">24 January 2018</p>
                        <h3>Ministry of Youth and Sports</h3>
                        <p>
                            Thanks Maxxima Resources and CellMaxx for sponsoring Le Tour de
                            Langkawi 2017.
                        </p>
                        <a class="link"
                           href="{{ asset('assets/img/opt/proof-letter-kbs-2018-01-24-640.webp') }}"
                           target="_blank" rel="noopener">
                            Read the letter <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section section--journal">
        <div class="wrap--narrow stack">
            <h2>From learning to building</h2>
            <p class="body">The internet came next, in 1996. Then came websites and systems, running a business, and teaching in classrooms, workshops and boardrooms.</p>
            <p class="body">Working across those settings taught me to look beyond the tool. A system has to work for the people using it. A business has to make the time and cost worthwhile. A class has to leave someone able to do something.</p>
            <p class="body">That is how I approach AI and software today. Start with real work, make the tools useful and help people build enough understanding to carry on for themselves. Sometimes that means teaching a team. Sometimes it means building the website, application, integration or system they need.</p>
            <a class="link" href="{{ route('creations') }}#websites">Explore the websites and systems I have made</a>
        </div>
    </section>

    <section class="section section--tight" id="learning" data-reveal>
        <div class="wrap">
            <div class="head">
                <h2>Still learning in rooms.</h2>
                <p class="body">
                    The internet taught me to build. These rooms taught me how to think about
                    business, money and people. The teachers I keep returning to include
                    <a class="link" href="https://en.wikipedia.org/wiki/Tony_Robbins"
                       target="_blank" rel="noopener">Tony Robbins</a>,
                    <a class="link" href="https://en.wikipedia.org/wiki/Vishen_Lakhiani"
                       target="_blank" rel="noopener">Vishen Lakhiani</a>,
                    <a class="link" href="https://en.wikipedia.org/wiki/Jim_Kwik"
                       target="_blank" rel="noopener">Jim Kwik</a>,
                    <a class="link" href="https://www.iamjeffreyallen.com/"
                       target="_blank" rel="noopener">Jeffrey Allen</a>,
                    <a class="link" href="https://ericedmeades.com/"
                       target="_blank" rel="noopener">Eric Edmeades</a>,
                    <a class="link" href="https://www.mindvalley.com/blog/people/jeffrey-perlman/"
                       target="_blank" rel="noopener">Jeffrey Perlman</a>,
                    <a class="link" href="https://motivatingthemasses.com/"
                       target="_blank" rel="noopener">Lisa Nichols</a>
                    and
                    <a class="link" href="https://www.dolfderoos.com/home-page-a"
                       target="_blank" rel="noopener">Dolf de Roos</a>.
                </p>
            </div>
            <div class="proof-gallery proof-gallery--three">
                <figure>
                    <x-photo name="proof-mindvalley-evolution"
                             alt="Saiffil Fariz at the Mindvalley Evolution event"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        At Mindvalley Evolution.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-mindvalley-lisa-nichols"
                             alt="Saiffil Fariz at a Mindvalley event with Lisa Nichols on the banner"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        At a Mindvalley event, with Lisa Nichols on the banner.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-tony-robbins-business-mastery-2018"
                             alt="Tony Robbins Business Mastery workbook and name badge, Amsterdam 2018"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        Tony Robbins Business Mastery, Amsterdam, June 2018.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-tony-robbins-wealth-mastery-2018"
                             alt="Tony Robbins Wealth Mastery workbook and name badge, Singapore 2018"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        Tony Robbins Wealth Mastery, Singapore, 2018.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-dolf-de-roos-real-estate-riches"
                             alt="Dolf de Roos Real Estate Riches workbook and name badge"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        Dolf de Roos, Real Estate Riches.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-mindvalley-vishen-stage"
                             alt="Saiffil Fariz at a Mindvalley event with Vishen Lakhiani on stage"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        At a Mindvalley event, with Vishen Lakhiani on stage.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-with-vishen-lakhiani"
                             alt="Saiffil Fariz with Vishen Lakhiani"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        With Vishen Lakhiani.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-jim-kwik"
                             alt="Saiffil Fariz with Jim Kwik"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        With Jim Kwik.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-jeffrey-allen"
                             alt="Saiffil Fariz with Jeffrey Allen"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        With Jeffrey Allen.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-eric-edmeades"
                             alt="Saiffil Fariz with Eric Edmeades"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        With Eric Edmeades.
                    </figcaption>
                </figure>
                <figure>
                    <x-photo name="proof-jeffrey-perlman"
                             alt="Saiffil Fariz with Jeffrey Perlman"
                             sizes="(max-width: 720px) 100vw, 50vw" />
                    <figcaption class="caption">
                        With Jeffrey Perlman.
                    </figcaption>
                </figure>
            </div>
            <p class="trail">What those rooms changed about my teaching: <a class="link link--inline" href="{{ route('speaking-service') }}">how I prepare a talk →</a> <a class="link link--inline" href="{{ route('programmes') }}">the programmes →</a></p>
        </div>
    </section>

    <section class="section section--paper" id="thinking" data-reveal>
        <div class="wrap">
            <div class="head">
                <h2>How I think</h2>
                <p class="body">Four beliefs shape every talk, class and build. Each one comes from something that went wrong first.</p>
            </div>
            <div class="grid grid--4">
                @foreach ([
                    ['Start with people', 'Most failed projects did not fail because of the software. Nobody agreed on what done looks like, nobody owned the work after launch, or the people who had to use it were never asked.'],
                    ['Useful beats impressive', 'A demo that delights and a tool nobody opens are the same failure. I would rather ship the boring fix that saves four hours a month.'],
                    ['Teach so they can carry on', 'Every engagement ends with someone on your team able to own it: notes, source code and a handover, not a dependency on me.'],
                    ['Say so when it will not work', 'If I am not the right person, or the idea will not pay for itself, I say so on the first call. A clear no is more useful than a hopeful yes.'],
                ] as $belief)
                    <article class="paper-card">
                        <h3>{{ $belief[0] }}</h3>
                        <p>{{ $belief[1] }}</p>
                    </article>
                @endforeach
            </div>
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
                <p class="body">I also make music and films, and follow ideas that begin simply as hobbies. Some find their way into bigger projects; others are a reason to keep exploring.</p>
                <a class="link" href="{{ route('creations') }}">Explore my creations</a>
            </div>
            <dl class="kv">
                <div>
                    <dt>Based in</dt>
                    <dd>Shah Alam, Malaysia</dd>
                </div>
                <div>
                    <dt>Family</dt>
                    <dd>Married, with two boys.</dd>
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
            <x-photo name="profile-ornatebatikshirt" alt="Saiffil in a batik shirt" class="cta__avatar"
                     sizes="120px" />
            <h2>Start a conversation</h2>
            <p class="lede">A talk, a collaboration or a project — tell me which one you have in mind and what you want to change.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('work') }}#enquire">Ways to work together</a>
            </div>
        </div>
    </section>

    <dialog class="lb" data-zoom-dialog aria-label="Photograph viewer">
        <button class="lb__btn lb__close" type="button" data-zoom-close aria-label="Close">✕</button>
        <img alt="">
        <p class="lb__cap" data-zoom-cap></p>
    </dialog>
</div>
