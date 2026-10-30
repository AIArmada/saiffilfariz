<x-slot:title>Work together | Saiffil Fariz</x-slot:title>
<x-slot:description>Tell Saiffil Fariz what you are trying to make possible: invite him to speak, train your team, build software or explore a partnership.</x-slot:description>

<div>
    <section class="phero">
        <div class="wrap phero__inner">
            <div class="phero__copy">
                <p class="phero__eyebrow">Tell me what you are trying to make possible.</p>
                <h1>Let’s talk</h1>
                <p class="lede">You do not need a perfect brief. Start with the people, the problem and the outcome you want. Help your people understand AI, improve the way your team works, build a useful product or bring a creative idea to life.</p>
                <div class="hero__actions">
                    <a class="btn btn--primary" href="#intents">Start with your intent</a>
                    <a class="btn btn--ghost" href="{{ route('creations') }}">Explore my creations</a>
                </div>
            </div>
            <div class="phero__media">
                <x-photo name="profile-bluevest" alt="Saiffil Fariz in a blue vest, ready to talk"
                         sizes="(max-width: 900px) 100vw, 44vw" :eager="true" class="cutout-top" />
            </div>
        </div>
    </section>

    <section class="section section--ink" id="intents" aria-labelledby="work-intents-heading">
        <div class="wrap">
            <div class="head">
                <h2 id="work-intents-heading">Start with your intent</h2>
                <p class="body">Pick whichever is closest to what you need. Each path leads somewhere specific — or enquire below and choose as you write.</p>
            </div>
            <div class="grid grid--4">
                @foreach ([
                    ['Invite me to speak', 'Keynotes, workshops, panels and podcast conversations.', 'speaking-service', 'book', 'Speaking and workshops'],
                    ['Train my team', 'Practical programmes built around your team’s real tasks.', 'programmes', 'reserve', 'Programmes and dates'],
                    ['Build something', 'Websites, applications, custom systems and integrations.', 'build', null, 'Software services'],
                    ['Explore a partnership', 'A creative collaboration, media project or something neither of us has named yet.', null, 'enquire', 'Enquire below'],
                ] as $path)
                    <article class="card card--flat">
                        <h3>{{ $path[0] }}</h3>
                        <p>{{ $path[1] }}</p>
                        <div class="card__foot" style="border-top:0;padding-top:0">
                            @if ($path[2])
                                <a class="link" href="{{ route($path[2]).($path[3] ? '#'.$path[3] : '') }}">{{ $path[4] }}</a>
                            @else
                                <a class="link" href="#enquire">{{ $path[4] }}</a>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--tight section--muted" id="enquire" aria-labelledby="enquire-heading">
        <div class="wrap split split--top">
            <div class="stack">
                <h2 id="enquire-heading">Send one enquiry</h2>
                <p class="body">Choose what you would like to do and the form adjusts. I read every message myself and reply within two working days.</p>
                <p class="small">Prefer email? Write to <a class="link" href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>
            </div>
            <div class="card form-card">
                <livewire:enquiry-form intent="speak" :showIntentPicker="true" />
            </div>
        </div>
    </section>

    <section class="section section--pine">
        <div class="wrap">
            <div class="head">
                <h2>How working with me goes</h2>
                <p class="body">A one-hour talk and a two-month project follow the same shape. You will always know what happens next and what it costs before we start.</p>
            </div>
            <div class="steps">
                @foreach ([
                    ['Talk', 'We start with a short call about what you want to get done. No slides. If I am not the right person, I will say so on that call.'],
                    ['Agree', 'You get a one-page note with what we will do, who is involved, the price and the dates. Nothing is booked until you agree to it.'],
                    ['Do the work', 'The talk, the programme, the process or the software, shaped around your own material and your own people.'],
                    ['Hand over', 'You keep the material, documentation and any source code, with a clear handover your team can use.'],
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
            <x-photo name="work-training-room" alt="A training room mid-workshop"
                     sizes="(max-width: 900px) 100vw, 50vw" />
        </div>
        <div class="band__copy">
            <h2>What success looks like</h2>
            <p class="body">A session has to help people act after the room empties. A system has to make a real task easier after launch. I look for changes people can point to: a clearer decision, a faster process or a customer who can finish what they came to do.</p>
            <p class="body">That is why learning, software and consulting all end with a clear next step and someone on your team who can own it.</p>
        </div>
    </section>

    <section class="cta">
        <div class="wrap cta__inner">
            <h2>Not ready to enquire?</h2>
            <p class="lede">Read how I think, see what I have made, or just say hello. Every page ends with a next step.</p>
            <div class="cta__actions">
                <a class="btn btn--primary" href="mailto:{{ config('site.contact.email') }}">Email me</a>
                <a class="btn btn--ghost" href="{{ route('story') }}">About me</a>
            </div>
        </div>
    </section>
</div>
