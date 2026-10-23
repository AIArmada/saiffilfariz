<?php

namespace App\Support;

use Illuminate\Support\Carbon;

/**
 * Reads assets/data/series.json — the long-running, multi-session series that
 * don't belong in the one-off engagement list (Talk With CEO, 2020–2021).
 *
 * Each episode is one announcement poster. Adding one means dropping the image
 * in assets/img/engagements/<poster_dir>/, adding a row to episodes, and
 * running tools/optimise-series.py.
 */
class Series
{
    /** Memoised for the request only, so an edited JSON shows up on reload. */
    private static ?array $cache = null;

    private static function data(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $path = base_path('assets/data/series.json');

        return self::$cache = is_file($path)
            ? json_decode(file_get_contents($path), true)
            : ['series' => [], 'themes' => []];
    }

    public static function themes(): array
    {
        return self::data()['themes'] ?? [];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::data()['series'] ?? [] as $row) {
            if ($row['slug'] === $slug) {
                return self::decorate($row);
            }
        }

        return null;
    }

    public static function first(): ?array
    {
        $rows = self::data()['series'] ?? [];

        return $rows ? self::find($rows[0]['slug']) : null;
    }

    private static function decorate(array $row): array
    {
        $row['episodes'] = collect($row['episodes'] ?? [])
            ->map(fn (array $ep) => self::episode($row, $ep))
            ->sortBy('date')
            ->values();

        $row['count'] = $row['episodes']->count();
        $row['years'] = $row['episodes']->groupBy('year')->sortKeys();

        $start = Carbon::parse($row['date_start']);
        $end = Carbon::parse($row['date_end']);
        $row['span_months'] = (int) round($start->diffInDays($end) / 30.44);
        $row['date_label'] = $start->format('F Y').' – '.$end->format('F Y');
        $row['url'] = route('series', $row['slug']);

        return $row;
    }

    private static function episode(array $series, array $ep): array
    {
        $id = (string) $ep['poster'];
        $manifest = self::manifest($series['slug']);
        $entry = $manifest[$id] ?? null;
        $widths = $entry['variants'] ?? [];
        $base = "assets/img/series/{$series['slug']}";

        $widest = $widths ? max($widths) : null;
        $smallest = $widths ? min($widths) : null;

        return [
            'id' => $id,
            'date' => $ep['date'],
            'date_label' => Carbon::parse($ep['date'])->format('j M Y'),
            'year' => substr($ep['date'], 0, 4),
            'title' => $ep['title'],
            'en' => $ep['en'] ?? null,
            'theme' => $ep['theme'] ?? null,
            'theme_label' => self::themes()[$ep['theme'] ?? ''] ?? null,
            'src' => $widest ? asset("{$base}/{$id}-{$widest}.webp") : null,
            'thumb' => $smallest ? asset("{$base}/{$id}-{$smallest}.webp") : null,
            'srcset' => collect($widths)
                ->map(fn ($w) => asset("{$base}/{$id}-{$w}.webp").' '.$w.'w')
                ->implode(', '),
            'width' => $entry['w'] ?? null,
            'height' => $entry['h'] ?? null,
            'alt' => $ep['title'].' — Talk With CEO, '.Carbon::parse($ep['date'])->format('j F Y'),
        ];
    }

    /** Poster manifest, memoised per series for the request. */
    private static function manifest(string $slug): array
    {
        static $memo = [];

        if (isset($memo[$slug])) {
            return $memo[$slug];
        }

        $path = public_path("assets/img/series/{$slug}/manifest.json");

        return $memo[$slug] = is_file($path)
            ? json_decode(file_get_contents($path), true)
            : [];
    }
}
