<x-slot:description>Learn to use AI on real work with Saiffil Fariz. Practical individual and team programmes that connect technology, business and people.</x-slot:description>

<div>
    <section class="phero phero--wide">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Build a capability you can keep</p>
                <h1>Programmes</h1>
                <p class="lede">These are small, practical classes. You bring a real task from your job. We work on it together, and you go home with it done or well started, plus notes you can follow on your own.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="#reserve">Reserve a seat</a>
                    <a class="btn btn--ghost" href="#details">See dates and prices</a>
                </div>
            </div>
            <div class="phero__media phero__media--wide">
                <x-photo name="editorial-learning-practice-v1" alt="Two learners working together on a laptop and a practical exercise"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" />
            </div>
        </div>
    </section>

    <section class="strip">
        <div class="wrap strip__grid">
            @foreach ([
                ['12', 'seats per class', "so I can see everyone's work"],
                ['2', 'days at most', 'mostly hands-on'],
                ['1', 'real task finished', 'from your own job'],
                ['0', 'jargon', 'plain language throughout'],
            ] as $fact)
                <div>
                    <b>{{ $fact[0] }}</b>
                    <span>{{ $fact[1] }}</span>
                    <small>{{ $fact[2] }}</small>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section" id="details">
        <div class="wrap">
            <div class="head">
                <h2>The three programmes</h2>
                <p class="body">Not sure which one fits? Start with AI Awakening. It covers the basics the other two build on.</p>
            </div>

            @foreach ($programmes as $i => $programme)
                <article class="prog">
                    <div class="prog__media">
                        <x-photo :name="$programme['image']" :alt="$programme['name']"
                                 sizes="(max-width: 900px) 100vw, 40vw" />
                    </div>
                    <div class="prog__content">
                        <div class="prog__head">
                            <h3>{{ $programme['name'] }}</h3>
                            <p class="prog__price">{{ $programme['price'] }} <span>{{ $programme['price_note'] }}</span></p>
                        </div>
                        <p class="body">{{ $programme['summary'] }}</p>
                        <div class="tag-row">
                            <span class="chip chip--accent">{{ $programme['format'] }}</span>
                            <span class="chip">{{ $programme['location'] }}</span>
                            <span class="chip">{{ $programme['dates'] }}</span>
                            <span class="chip">{{ $programme['seats'] }}</span>
                        </div>
                        <dl class="kv kv--compact">
                            <div>
                                <dt>You leave with</dt>
                                <dd>{{ $i === 0
                                    ? 'One AI workflow that works on your own task, written down so a colleague can use it without you.'
                                    : ($i === 1
                                        ? 'A simple brand kit. Your voice, your visuals and a repeatable brief your team can keep using.'
                                        : 'One pilot project with a named owner and a clear way to tell if it worked.') }}</dd>
                            </div>
                            <div>
                                <dt>Who it is for</dt>
                                <dd>{{ $i === 2
                                    ? 'Teams of 6 to 20 people, including the person who owns the result.'
                                    : 'Individuals and small teams. You do not need a technical background.' }}</dd>
                            </div>
                            <div>
                                <dt>What to bring</dt>
                                <dd>A laptop, and one real task you keep putting off.</dd>
                            </div>
                        </dl>
                        <a class="btn {{ $programme['featured'] ? 'btn--primary' : 'btn--ghost' }}" href="#reserve">
                            {{ $i === 2 ? 'Ask about a team booking' : 'Reserve a seat' }}
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section class="section section--muted">
        <div class="wrap">
            <div class="head">
                <h2>How every programme runs</h2>
                <p class="body">The subject changes. The way I run the room does not.</p>
            </div>
            <div class="steps">
                @foreach ([
                    ['Your own work', 'Every exercise uses a task from your job. I only use sample files to show an example first.'],
                    ['Small classes', 'Twelve seats at most, so I can look at your screen and your questions, not just talk at the room.'],
                    ['Notes to keep', 'You get the notes, templates and prompts in writing, so you can repeat the work and share it.'],
                    ['A follow-up call', 'We meet again online about a month later, when you have tried things and real questions have come up.'],
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

    <section class="section">
        <div class="wrap split split--top">
            <div class="stack">
                <h2>Questions people ask</h2>
                <p class="body">If your question is not here, email me. I would rather answer it now than have you guess.</p>
                <a class="link" href="mailto:{{ config('site.contact.email') }}">Ask me a question</a>
            </div>
            <dl class="kv">
                <div>
                    <dt>Do I need to know AI already?</dt>
                    <dd>No. AI Awakening starts from the beginning. If you already use AI, you will still get feedback on your own task.</dd>
                </div>
                <div>
                    <dt>What if I cannot make the dates?</dt>
                    <dd>Tell me anyway. I set new dates based on the waiting list, and I will email you when the next class opens.</dd>
                </div>
                <div>
                    <dt>Is it mostly lectures?</dt>
                    <dd>No. About 70 percent of the time you are working. I explain what you need, then you try it.</dd>
                </div>
                <div>
                    <dt>Can you help us turn this into a working system?</dt>
                    <dd>Yes. Alongside training, I build websites, applications, custom systems and integrations. <a class="link" href="{{ route('build') }}">Explore software services</a>, or <a class="link" href="{{ route('consulting') }}">explore consulting</a> if you want to work through the process together.</dd>
                </div>
                <div>
                    <dt>Can my company pay by invoice?</dt>
                    <dd>Yes. Say so in the form and I will send an invoice instead of a payment link.</dd>
                </div>
                <div>
                    <dt>What if I need to cancel?</dt>
                    <dd>Full refund up to 14 days before the class. After that you can move to a later class or send a colleague in your place.</dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="section section--muted" id="reserve">
        <div class="wrap split split--top">
            <div class="stack">
                <h2>Reserve a seat</h2>
                <p class="body">Tell me which programme you want and how many seats. I will confirm that seats are free and send you the payment details. Nothing is charged until you hear from me.</p>
                <p class="small">Prefer email? Write to <a class="link" href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>
            </div>
            <div class="card form-card">
                <livewire:enquiry-form intent="programme" />
            </div>
        </div>
    </section>
</div>
