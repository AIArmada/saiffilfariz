<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Saiffil Fariz' }}</title>
    <meta name="description" content="{{ $description ?? config('site.positioning.description') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Saiffil Fariz' }}">
    <meta property="og:description" content="{{ $description ?? config('site.positioning.description') }}">
    <meta property="og:site_name" content="Saiffil Fariz">
    <meta property="og:image" content="{{ rtrim(config('app.url'), '/').'/images/og-default.jpg' }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="A ribbon of gold light sweeping over a dark landscape">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <meta name="theme-color" content="#141714">

    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23141714'/><text y='.86em' x='50%' text-anchor='middle' font-size='78' font-family='Georgia,serif' fill='%23D8AE7B'>S</text></svg>">
    <link rel="preload" href="{{ asset('fonts/dm-sans-400-latin.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/playfair-display-400-latin.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="{{ asset('fonts/fonts.css') }}">

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
