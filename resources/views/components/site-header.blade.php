@php
    $nav = [
        ['route' => 'home', 'label' => 'Home', 'also' => []],
        ['route' => 'story', 'label' => 'My Story', 'also' => []],
        ['route' => 'creations', 'label' => 'My Work', 'also' => ['creation']],
        ['route' => 'speaking', 'label' => 'Speaking & Learning', 'also' => ['talk', 'series', 'speaking-service', 'programmes']],
        ['route' => 'ideas', 'label' => 'Ideas', 'also' => ['article', 'pillar']],
        ['route' => 'work', 'label' => 'Work With Me', 'also' => ['build', 'consulting']],
    ];
    $activePage = collect($nav)->first(fn ($item) => request()->routeIs($item['route'])
        || collect($item['also'])->contains(fn ($name) => request()->routeIs($name)));
@endphp

<header class="site-header site-header--v3">
    <div class="wrap header-inner">
        <a class="header-home" href="{{ route('home') }}" aria-label="Saiffil Fariz — Home">
            <span class="header-home__mark" aria-hidden="true">SF</span>
            <span>Saiffil Fariz</span>
        </a>
        <nav class="primary-nav" aria-label="Primary navigation">
            @foreach ($nav as $item)
                @php
                    $isCurrent = request()->routeIs($item['route'])
                        || collect($item['also'])->contains(fn ($name) => request()->routeIs($name));
                @endphp
                <a href="{{ route($item['route']) }}" @if ($isCurrent) aria-current="page" @endif>{{ $item['label'] }}</a>
            @endforeach
        </nav>
        <a class="header-cta" href="{{ route('work') }}#enquire">Get in touch <span aria-hidden="true">↗</span></a>
        <button type="button" class="burger" data-burger aria-expanded="false"
                aria-controls="mobile-nav" aria-label="Open menu">
            <span class="burger__label">Menu</span>
            <span class="burger__icon" aria-hidden="true"><span></span><span></span></span>
        </button>
        <p class="mobile-section-name" aria-hidden="true">{{ $activePage['label'] ?? 'Explore' }}</p>
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
        <p class="label">Services</p>
        @foreach (config('site.services') as $serviceRoute => $service)
            <a class="mobile-nav__action" href="{{ route($serviceRoute).($service['anchor'] ? '#'.$service['anchor'] : '') }}">
                <b>{{ $service['action'] }}</b>
                <span>{{ $service['summary'] }}</span>
            </a>
        @endforeach
    </div>

    <a class="btn" href="mailto:{{ config('site.contact.email') }}">Email me</a>
</nav>
