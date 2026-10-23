@php
    $nav = [
        ['route' => 'home', 'label' => 'Home', 'also' => []],
        ['route' => 'story', 'label' => 'About me', 'also' => []],
        ['route' => 'work', 'label' => 'Work', 'also' => []],
        // Talks are part of the speaking story, so the tab stays lit there too.
        ['route' => 'speaking', 'label' => 'Speaking', 'also' => ['talks', 'talk', 'series']],
        // Articles and topics belong to Writing, so the tab stays lit there.
        ['route' => 'writing', 'label' => 'Writing', 'also' => ['article', 'pillar']],
    ];
@endphp

<header class="site-header">
    <div class="wrap header-inner">
        <button type="button" class="burger" data-burger aria-expanded="false"
                aria-controls="mobile-nav" aria-label="Open menu">
            <span class="burger__label">Menu</span>
            <span class="burger__icon" aria-hidden="true"><span></span><span></span></span>
        </button>
    </div>
</header>

<nav class="mobile-nav" id="mobile-nav" data-mobile-nav aria-label="Site menu">
    <div class="mobile-nav__primary">
        @foreach ($nav as $item)
            @php
                $isCurrent = request()->routeIs($item['route'])
                    || collect($item['also'])->contains(fn ($name) => request()->routeIs($name));
            @endphp
            <a class="mobile-nav__link" href="{{ route($item['route']) }}"
               @if ($isCurrent) aria-current="page" @endif>{{ $item['label'] }}</a>
        @endforeach
    </div>

    <div class="mobile-nav__group">
        <p class="label">Work with me</p>
        <a class="mobile-nav__action" href="{{ route('speaking') }}#book">
            <b>Invite me to speak</b>
            <span>Tell me the date, the room and the topic.</span>
        </a>
        <a class="mobile-nav__action" href="{{ route('programmes') }}">
            <b>Join a programme</b>
            <span>See dates, prices and seats left.</span>
        </a>
        <a class="mobile-nav__action" href="{{ route('consulting') }}">
            <b>Help for your team</b>
            <span>For teams putting AI into a real process.</span>
        </a>
    </div>

    <a class="btn" href="mailto:{{ config('site.contact.email') }}">Email me</a>
</nav>
