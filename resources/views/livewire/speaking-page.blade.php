<x-slot:description>Practical AI keynotes and workshops grounded in building software, running a business and teaching people. Invite Saiffil Fariz to speak to your team.</x-slot:description>

<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Ideas that open minds</p>
                <h1>Speaking</h1>
                <p class="lede">I give talks and workshops about using AI at work. I skip the hype. I explain what the tools can do today, what they still get wrong, and what your people can try first. Every talk includes time for questions.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="#book">Check a date</a>
                    <a class="btn btn--ghost" href="#talks">See the talks</a>
                </div>
            </div>
            <div class="phero__media">
                <x-photo name="work-large-audience" alt="Saiffil Fariz on stage in front of a full hall"
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

    <section class="section" id="talks">
        <div class="wrap">
            <div class="head">
                <h2>Talks I give</h2>
                <p class="body">These four are the ones I am asked for most. Each one runs as a 45-minute keynote or a longer workshop, and I adjust the examples for your audience.</p>
            </div>
            <div class="rows">
                @foreach ([
                    ['AI without the hype.', 'What AI tools can do today, what they still cannot do, and how to tell the difference before you spend money. Your team leaves with a short list of things worth trying.', '45 to 75 minutes', 'Mixed audiences'],
                    ['Using AI in everyday work.', 'Five everyday jobs most teams can improve this quarter. Writing, research, meetings, reporting, and the handover notes nobody writes. I work live, on examples close to your own.', '60 to 90 minutes', 'Teams'],
                    ['People first, tools second.', 'Why many AI projects stall even when the software works. I cover the four questions that tell you early whether a project will stick.', '45 minutes', 'Leaders'],
                    ['Explaining hard things clearly.', 'How to explain a complicated topic to busy people so they can act on it. Drawn from thirty years of teaching and plenty of mistakes.', '45 to 60 minutes', 'Communicators and trainers'],
                ] as $talk)
                    <div class="rows__item">
                        <div>
                            <h3>{{ $talk[0] }}</h3>
                            <p>{{ $talk[1] }}</p>
                        </div>
                        <div class="rows__meta">
                            <b>{{ $talk[2] }}</b>
                            {{ $talk[3] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>Ways to book me</h2>
                <p class="body">Most bookings are keynotes. Workshops work better when people need to practise, not just listen.</p>
            </div>
            <div class="grid grid--4">
                @foreach ([
                    ['Keynote', '45 to 90 minutes', 'One clear talk for your event, with examples chosen for your audience and time for questions.'],
                    ['Workshop', 'Half day or full day', 'People work on their own tasks, on their own laptops. They leave with something started and notes to finish it.'],
                    ['Panel', '30 to 60 minutes', 'I am happy to join a panel. I will say what I think, keep it friendly, and share the time.'],
                    ['Guest lecture', '60 to 120 minutes', 'For universities and colleges. Practical sessions that connect the subject to first jobs and real workplaces.'],
                ] as $format)
                    <article class="card card--flat">
                        <p class="small">{{ $format[1] }}</p>
                        <h3>{{ $format[0] }}</h3>
                        <p>{{ $format[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    @if ($talks->isNotEmpty())
        <section class="section">
            <div class="wrap">
                <div class="head">
                    <h2>Where I have spoken</h2>
                    <div class="stack">
                        <p class="body">Ministries, agencies, universities, companies, and once a village ICT centre in Tanjong Sepat. The message changes with the room. The honesty does not.</p>
                        <a class="link" href="{{ route('talks') }}">See all {{ $talkCount }} sessions</a>
                        @if ($wall = \App\Support\Series::first())
                            <a class="link" href="{{ $wall['url'] }}">See the weekly series I ran in 2020 and 2021</a>
                        @endif
                    </div>
                </div>
                <div class="talk-grid">
                    @foreach ($talks as $talk)
                        <x-talk-card :talk="$talk" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="band">
        <div class="band__media">
            <x-photo name="method-navigation-map" alt="A hand-drawn map of ideas on paper"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy stack">
            <h2>How I prepare a talk</h2>
            <p class="body">Before I write a single slide, I ask who will be in the room, what they already think, and what decision they face next. Then I decide what they should still remember a month later, and I build the talk around that.</p>
            <p class="body">My perspective comes from programming, business and teaching. I also build websites, applications and custom systems, so the questions I bring to the room come from making technology work for people in practice.</p>
            <a class="link" href="{{ route('creations') }}#websites">Explore the websites and systems I have made</a>
        </div>
    </section>

    <section class="section">
        <div class="wrap split split--top">
            <div class="stack">
                <h2>Useful details</h2>
                <p class="body">The practical side, in one place. If your event runs differently, tell me. Most of this is flexible, and I charge less for schools, public institutions and non-profits.</p>
                <p class="small">Something else you need to know? <a class="link" href="mailto:{{ config('site.contact.email') }}">Email me</a>.</p>
            </div>
            <dl class="kv">
                <div>
                    <dt>Based in</dt>
                    <dd>Shah Alam, Malaysia. I travel across Malaysia and the region.</dd>
                </div>
                <div>
                    <dt>Lead time</dt>
                    <dd>Four to six weeks is comfortable. Ask anyway if your date is sooner. If I am free, I will do my best.</dd>
                </div>
                <div>
                    <dt>Travel</dt>
                    <dd>Included within the Klang Valley. For other places I charge travel at cost, agreed with you in writing first.</dd>
                </div>
                <div>
                    <dt>What I need</dt>
                    <dd>A microphone people can hear, an HDMI connection, and a screen the back row can read. I bring my own adapters and a backup copy of the slides.</dd>
                </div>
                <div>
                    <dt>Languages</dt>
                    <dd>English and Bahasa Malaysia. Mixed audiences are fine.</dd>
                </div>
                <div>
                    <dt>Recording</dt>
                    <dd>You may record the session for your own team. Please ask before publishing it anywhere public.</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="section section--muted" id="book">
        <div class="wrap split split--top">
            <div class="stack">
                <h2>Check a date</h2>
                <p class="body">Tell me about your event. Who is coming, what they already know, and what you want them to do differently afterwards. That is enough for me to reply with a clear yes or no and a price.</p>
                <p class="body">You will hear back from me personally.</p>
                <p class="small">Prefer email? Write to <a class="link" href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>
            </div>
            <div class="card form-card">
                <livewire:enquiry-form intent="speak" />
            </div>
        </div>
    </section>
</div>
