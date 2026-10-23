@props(['name', 'alt', 'sizes' => '100vw', 'eager' => false, 'class' => null])

@php
    // Keyed on the manifest's mtime so adding images never serves a stale list.
    $path = public_path('assets/img/opt/manifest.json');
    $stamp = is_file($path) ? filemtime($path) : 0;

    $manifest = \Illuminate\Support\Facades\Cache::rememberForever(
        'img:manifest:'.$stamp,
        fn () => is_file($path) ? json_decode(file_get_contents($path), true) : []
    );

    $entry = $manifest[$name] ?? null;
    $widths = $entry['variants'] ?? [];
    $srcset = collect($widths)
        ->map(fn ($w) => asset("assets/img/opt/{$name}-{$w}.webp").' '.$w.'w')
        ->implode(', ');

    // Prefer a 1200px JPEG fallback; if that file was never written, use the
    // widest webp. Never emit a src we know is missing.
    $jpgWidth = min(1200, $entry['w'] ?? 1200);
    $jpgPath = "assets/img/opt/{$name}-{$jpgWidth}.jpg";
    $widest = $widths ? max($widths) : null;

    $fallback = match (true) {
        is_file(public_path($jpgPath)) => asset($jpgPath),
        $widest !== null => asset("assets/img/opt/{$name}-{$widest}.webp"),
        default => '',
    };
@endphp

<picture>
    @if ($srcset !== '')
        <source type="image/webp" srcset="{{ $srcset }}" sizes="{{ $sizes }}">
    @endif
    <img
        src="{{ $fallback }}"
        alt="{{ $alt }}"
        @if ($entry) width="{{ $entry['w'] }}" height="{{ $entry['h'] }}" @endif
        loading="{{ $eager ? 'eager' : 'lazy' }}"
        decoding="async"
        @if ($eager) fetchpriority="high" @endif
        @class([$class])
    >
</picture>
