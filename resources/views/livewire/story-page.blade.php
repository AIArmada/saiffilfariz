<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Always learning. Still building.</p>
                <h1>About me</h1>
                <p class="lede">I first went online in 1996, on a dial-up modem in Shah Alam. The connection was slow and the phone bill was not small, but I was hooked. Almost thirty years later, my work is still about the same thing. I help people use new technology without feeling lost.</p>
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

    <section class="section">
        <div class="wrap split">
            <div class="band__media band__media--contained">
                <x-photo name="story-1988-computer" alt="An early home computer on a desk"
                         sizes="(max-width: 900px) 100vw, 50vw" />
            </div>
            <div class="stack">
                <h2>How I got here</h2>
                <p class="body">As a kid I liked taking things apart to see how they worked. Putting them back together took longer to learn. When the internet reached Malaysia, I could see it would change how people work and do business. I could also see that most people around me had no easy way in.</p>
                <p class="body">So I started there. First I built websites and systems. Then I ran a small business and learned what owners actually worry about. Later I began teaching in classrooms, workshops and boardrooms. These days most of the teaching is about AI.</p>
                <p class="body">The tools keep changing. The job stays the same. Explain things clearly, use real examples, and make sure people can do it themselves after I leave.</p>
            </div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head head--wide">
                <h2>The short history</h2>
            </div>
            <div class="timeline timeline--five">
                @foreach ([
                    ['1996', 'First connection', 'Dial-up internet at home. Slow, noisy, and enough to change what I wanted to do with my life.'],
                    ['2004', 'Building', 'Websites, servers and systems for clients. Work that had to keep running on Monday morning, not just look good in a demo.'],
                    ['2012', 'Business', 'Running a small company of my own. I learned where money and time actually go in a small team.'],
                    ['2020', 'Teaching', 'Weekly live sessions, workshops and guest lectures. A lot of it for people who had been told technology was not for them.'],
                    ['Now', 'Talks, classes and projects', 'Keynotes, training programmes and project work with companies, agencies and universities in Malaysia and the region.'],
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
                    <dd>I still take things apart to see how they work. I am better at putting them back together now.</dd>
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
