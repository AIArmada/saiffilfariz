<?php

namespace App\Livewire;

use App\Support\Series;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class SeriesPage extends Component
{
    /**
     * Named $entry, not $series: Livewire assigns route parameters to
     * same-named public properties, and {series} is a string while this holds
     * the whole record.
     */
    public array $entry = [];

    public string $year = '';

    public string $theme = '';

    public function mount(string $series): void
    {
        $found = Series::find($series);

        abort_unless($found, 404);

        $this->entry = $found;

        // Filters are plain query parameters, like the library: shareable,
        // crawlable, and they survive a reload.
        $this->year = $this->valid(request()->query('year'), $found['years']->keys()->all());
        $this->theme = $this->valid(request()->query('theme'), array_keys(Series::themes()));
    }

    private function valid(mixed $value, array $allowed): string
    {
        // Year keys come back from groupBy() as integers, so compare as strings.
        $allowed = array_map('strval', $allowed);

        return in_array((string) $value, $allowed, true) ? (string) $value : '';
    }

    public function render()
    {
        $episodes = $this->entry['episodes'];

        $shown = $episodes
            ->when($this->year !== '', fn ($rows) => $rows->where('year', $this->year))
            ->when($this->theme !== '', fn ($rows) => $rows->where('theme', $this->theme))
            ->values();

        // Theme counts are computed against the year filter, so the chips never
        // advertise a theme that would come back empty.
        $themePool = $this->year !== ''
            ? $episodes->where('year', $this->year)
            : $episodes;

        return view('livewire.series-page', [
            'series' => $this->entry,
            'episodes' => $shown,
            'groups' => $shown->groupBy('year')->sortKeys(),
            'filtered' => $this->year !== '' || $this->theme !== '',
            'themeCounts' => $themePool->groupBy('theme')->map->count(),
        ]);
    }
}
