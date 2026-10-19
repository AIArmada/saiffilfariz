@php($current = $current ?? '')

<header class="reference-header" x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 18" :class="{ 'is-scrolled': scrolled }">
    <div class="reference-wrap reference-header-inner">
        <a href="{{ route('home') }}" class="reference-brand" wire:click="closeMenu" aria-label="Saiffil Fariz home">
            <span class="reference-mark">S</span>
            <span><strong>SAIFFIL FARIZ</strong><small>PEOPLE · IDEAS · A BRIGHTER TOMORROW</small></span>
        </a>
        <nav class="reference-nav" aria-label="Primary navigation">
            <a class="{{ $current === 'home' ? 'is-active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="{{ $current === 'story' ? 'is-active' : '' }}" href="{{ route('story') }}">Story</a>
            <a class="{{ $current === 'work' ? 'is-active' : '' }}" href="{{ route('work') }}">Work</a>
            <a class="{{ $current === 'speaking' ? 'is-active' : '' }}" href="{{ route('speaking') }}">Speaking</a>
            <a class="{{ $current === 'blog' ? 'is-active' : '' }}" href="{{ route('blog') }}">Writing</a>
            <a class="{{ $current === 'about' ? 'is-active' : '' }}" href="{{ route('about') }}">About</a>
        </nav>
        <a href="{{ route('contact') }}" class="reference-button reference-button-dark">Let’s Connect <span>→</span></a>
        <button type="button" class="reference-menu-button" wire:click="toggleMenu" :aria-expanded="$wire.menuOpen.toString()" aria-controls="reference-mobile-menu" aria-label="Toggle navigation">
            <span></span><span></span>
        </button>
    </div>
    <div id="reference-mobile-menu" class="reference-mobile-menu" @class(['is-open' => $menuOpen])>
        <a href="{{ route('home') }}" wire:click="closeMenu">Home</a>
        <a href="{{ route('story') }}" wire:click="closeMenu">Story</a>
        <a href="{{ route('work') }}" wire:click="closeMenu">Work</a>
        <a href="{{ route('speaking') }}" wire:click="closeMenu">Speaking</a>
        <a href="{{ route('blog') }}" wire:click="closeMenu">Writing</a>
        <a href="{{ route('about') }}" wire:click="closeMenu">About</a>
        <a href="{{ route('contact') }}" wire:click="closeMenu" class="reference-button reference-button-dark">Let’s Connect <span>→</span></a>
    </div>
</header>
