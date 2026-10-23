<?php

namespace App\Support;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * Reads assets/data/engagements.json — the single source of truth for talks,
 * trainings, webinars and community sessions.
 *
 * Adding a talk means editing that file and dropping photos in
 * assets/img/engagements/<slug>/, then running tools/optimise-engagements.py.
 * Nothing here needs to change.
 */
class Engagements
{
    private const TYPES = [
        'training' => 'Training',
        'keynote' => 'Keynote',
        'webinar' => 'Webinar',
        'workshop' => 'Workshop',
        'community' => 'Community',
        'media' => 'Media',
    ];

    /** Memoised for the request only, so an edited JSON shows up on reload. */
    private static ?Collection $cache = null;

    public static function all(): Collection
    {
        if (self::$cache instanceof Collection) {
            return self::$cache;
        }

        $path = base_path('assets/data/engagements.json');

        $rows = is_file($path)
            ? (json_decode(file_get_contents($path), true)['engagements'] ?? [])
            : [];

        return self::$cache = collect($rows)
            ->filter(fn (array $row) => ($row['status'] ?? 'published') === 'published')
            ->map(fn (array $row) => self::decorate($row))
            ->sortByDesc(fn (array $row) => $row['date_start'])
            ->values();
    }

    /** Entries with photos — the ones that get a card and their own page. */
    public static function featured(int $limit = 2): Collection
    {
        return self::all()
            ->reject(fn (array $row) => $row['listed_only'])
            ->take($limit)
            ->values();
    }

    /** The rest: real engagements with no photo archive yet. */
    public static function listedOnly(): Collection
    {
        return self::all()->filter(fn (array $row) => $row['listed_only'])->values();
    }

    public static function find(string $slug): ?array
    {
        return self::all()->firstWhere('slug', $slug);
    }

    /** Grouped by year for the archive. */
    public static function byYear(): Collection
    {
        return self::all()->groupBy('year');
    }

    private static function decorate(array $row): array
    {
        $row['type_label'] = self::TYPES[$row['type'] ?? 'training'] ?? Str::headline($row['type'] ?? 'Training');
        $row['date_label'] = self::dateLabel($row);
        $row['year'] = substr((string) ($row['date_start'] ?? ''), 0, 4);
        $row['listed_only'] = (bool) ($row['listed_only'] ?? false);
        $row['url'] = route('talk', $row['slug']);
        $row['cover'] = 'talk-'.$row['slug'];
        $row['gallery'] = self::gallery($row['slug']);

        return $row;
    }

    private static function dateLabel(array $row): string
    {
        $start = $row['date_start'] ?? null;

        if (! $start) {
            return '';
        }

        $precision = $row['date_precision'] ?? 'day';
        $from = Carbon::parse($start);
        $to = ! empty($row['date_end']) ? Carbon::parse($row['date_end']) : null;

        if ($precision === 'year') {
            return $from->format('Y');
        }

        if ($precision === 'month') {
            return $from->format('F Y');
        }

        if ($to && ! $to->isSameDay($from)) {
            // Same month: 13–20 August 2026. Different month: 28 July – 2 August 2026.
            return $from->month === $to->month
                ? $from->format('j').'–'.$to->format('j F Y')
                : $from->format('j F').' – '.$to->format('j F Y');
        }

        return $from->format('j F Y');
    }

    private static function gallery(string $slug): array
    {
        $path = public_path("assets/img/engagements/{$slug}/manifest.json");

        if (! is_file($path)) {
            return [];
        }

        $rows = json_decode(file_get_contents($path), true)['gallery'] ?? [];

        return array_map(function (array $img) use ($slug) {
            $widths = $img['variants'] ?? [];
            $largest = $widths ? max($widths) : null;

            return [
                'id' => $img['id'],
                'src' => $largest
                    ? asset("assets/img/engagements/{$slug}/{$img['id']}-{$largest}.webp")
                    : null,
                'srcset' => collect($widths)
                    ->map(fn ($w) => asset("assets/img/engagements/{$slug}/{$img['id']}-{$w}.webp").' '.$w.'w')
                    ->implode(', '),
                'width' => $img['w'] ?? null,
                'height' => $img['h'] ?? null,
            ];
        }, $rows);
    }
}
