<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Saiffil Fariz' }}</title>
    <meta name="description" content="{{ $description ?? 'Saiffil Fariz is a speaker, trainer and consultant based in Shah Alam. He helps people and teams use AI for real work.' }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Saiffil Fariz' }}">
    <meta property="og:description" content="Talks, training programmes and practical help on using AI at work.">
    <meta property="og:site_name" content="Saiffil Fariz">
    <meta name="theme-color" content="#141714">

    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23141714'/><text y='.86em' x='50%' text-anchor='middle' font-size='78' font-family='Georgia,serif' fill='%23D8AE7B'>S</text></svg>">
    <link rel="preload" href="{{ asset('fonts/dm-sans-400-latin.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/playfair-display-400-latin.woff2') }}" as="font" type="font/woff2" crossorigin>

    @vite(['resources/css/site.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body data-menu="closed" data-hero-header="{{ request()->routeIs('home') ? 'overlay' : 'standard' }}">
    <a class="skip" href="#main">Skip to content</a>

    <x-site-header />

    <main id="main">
        {{ $slot }}
    </main>

    <x-site-footer />

    @livewireScripts
</body>
</html>
