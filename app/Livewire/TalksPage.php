<?php

namespace App\Livewire;

use App\Support\Engagements;
use App\Support\Series;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Speaking | Saiffil Fariz')]
class TalksPage extends Component
{
    public function render()
    {
        $series = Series::first();

        return view('livewire.talks-page', [
            'featured' => Engagements::all()->reject(fn (array $engagement) => $engagement['listed_only'])->values(),
            'listed' => Engagements::listedOnly(),
            'total' => Engagements::all()->count(),
            'series' => $series,
            // Every eighth poster: a spread across the whole run, not six from
            // the same month.
            'seriesStrip' => $series
                ? $series['episodes']->values()->filter(fn ($ep, $i) => $i % 8 === 0)->take(6)->values()
                : collect(),
        ]);
    }
}
