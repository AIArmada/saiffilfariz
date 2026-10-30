@php
    $nav = [
        ['route' => 'home', 'label' => 'Home', 'also' => []],
        ['route' => 'story', 'label' => 'About me', 'also' => []],
        ['route' => 'creations', 'label' => 'Creations', 'also' => ['creation']],
        ['route' => 'speaking', 'label' => 'Speaking', 'also' => ['talk', 'series']],
        ['route' => 'ideas', 'label' => 'Ideas', 'also' => ['article', 'pillar']],
        ['route' => 'work', 'label' => 'Let’s talk', 'also' => ['build', 'speaking-service', 'programmes', 'consulting']],
    ];
@endphp

<header class="site-header">
    <div class="wrap header-inner">
        <a class="header-home" href="{{ route('home') }}" aria-label="Saiffil Fariz home">saiffilfariz<span aria-hidden="true">.</span></a>
        <a class="btn btn--primary header-cta" href="{{ route('work') }}">Let’s talk</a>
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
