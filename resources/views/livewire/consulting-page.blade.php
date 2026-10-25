<x-slot:description>Improve business processes with AI, useful software and integrations. Work with Saiffil Fariz to connect the people, the work and a clear outcome.</x-slot:description>

<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">From possibility to practice</p>
                <h1>Consulting for teams</h1>
                <p class="lede">I help teams connect AI, business processes and the systems they use every day. We start with the people and the work, agree on what better looks like, then make it happen through practical advice, a clearer workflow or a software build.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="#talk">Tell me about your project</a>
                    <a class="btn btn--ghost" href="#shapes">How engagements work</a>
                </div>
            </div>
            <div class="phero__media">
                <x-photo name="work-executive-workshop" alt="Saiffil working through a problem with a team around a table"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" />
            </div>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="head">
                <h2>Where projects usually stall</h2>
                <p class="body">I have seen these four patterns in well-run organisations. A clearer process and an owner come first. Then we can judge where training, an integration or custom software will make the improvement stick.</p>
            </div>
            <div class="grid grid--4">
                @foreach ([
                    ['The pilot nobody uses', 'A team built something clever in a demo. Daily work never changed, and the licence still renews every year.'],
                    ['The tool nobody opens', 'Software was given to 300 people. Nine use it. The training was one webinar.'],
                    ['The policy came first', 'A ban was written before anyone understood the tools. Staff now use AI quietly on personal accounts, where nobody can see it.'],
                    ['The plan with no owner', 'A strategy deck with a timeline and no names. Everyone agrees with it. Nothing happens.'],
                ] as $pattern)
                    <article class="card card--flat">
                        <h3>{{ $pattern[0] }}</h3>
                        <p>{{ $pattern[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>How we work</h2>
                <p class="body">We do not start with a tool or a whole department. We pick one process that is slow, repetitive and annoying, and we make that one better.</p>
            </div>
            <div class="steps">
                @foreach ([
                    ['Pick one process', 'For about two weeks I sit in, ask questions and watch how work really flows. We choose one process with a clear owner and a cost we can measure.'],
                    ['Test it small', 'We build a working version on your real data within weeks. If it does not save time, we stop and I will tell you why.'],
                    ['Hand it over', 'Your team gets the documentation, any prompts and source code, and a clear view of exceptions and ownership.'],
                    ['Then the next one', 'Only when the first process is running well do we choose a second one.'],
                ] as $index => $step)
                    <div class="steps__item">
                        <b>{{ $index + 1 }}</b>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="band">
        <div class="band__media">
            <x-photo name="editorial-workflow-mapping-v1" alt="Hands mapping a business process with paper cards and connecting arrows"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy stack">
            <h2>What good looks like</h2>
            <p class="body">Success is quiet. The monthly report that took four hours now takes forty minutes, and nobody finds that exciting anymore. It is just how work gets done.</p>
            <p class="body">That is the aim. Your team owns the improvement, and you stop needing me.</p>
        </div>
    </section>

    <section class="section" id="shapes">
        <div class="wrap">
            <div class="head">
                <h2>Ways to work together</h2>
                <p class="body">Most teams start with the sprint. Some stop there, and that is fine.</p>
            </div>
            <div class="rows">
                @foreach ([
                    ['The sprint', 'Two to four weeks to test one process. You get a working prototype and a written recommendation. Sometimes the honest answer is do not proceed, and I will say so.', 'From RM 18,000', '2 to 4 weeks'],
                    ['Monthly advice', 'A regular session with the team doing the work. You get a second opinion before you spend the budget, not after.', 'From RM 4,500 per month', '3 to 12 months'],
                    ['The build', 'A website, application, custom system or integration shaped around the process. I scope the work, build it and hand over the source code and setup notes.', 'Quoted per project', '6 to 16 weeks'],
                ] as $shape)
                    <div class="rows__item">
                        <div>
                            <h3>{{ $shape[0] }}</h3>
                            <p>{{ $shape[1] }}</p>
                        </div>
                        <div class="rows__meta">
                            <b>{{ $shape[2] }}</b>
                            {{ $shape[3] }}
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="small note">Schools, public institutions and non-profits pay less. Ask me and I will quote for your situation.</p>
            <a class="link" href="{{ route('build') }}">Explore software services</a>
        </div>
    </section>

    <section class="section section--muted" id="talk">
        <div class="wrap split split--top">
            <div class="stack">
                <h2>Tell me about your project</h2>
                <p class="body">Describe the process you want to fix, in plain words. If I am not the right person, I will tell you on the first call and suggest someone better.</p>
                <p class="small">Prefer email? Write to <a class="link" href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>
            </div>
            <div class="card form-card">
                <livewire:enquiry-form intent="consult" />
            </div>
        </div>
    </section>
</div>
