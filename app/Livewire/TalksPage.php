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
            'listedGroups' => [
                ['key' => 'teaching', 'title' => 'Teaching and training', 'blurb' => 'Sessions for ministries, agencies, universities and companies. The same approach I describe on the story page —', 'link' => route('story').'#learning', 'linkLabel' => 'why I teach this way →', 'types' => ['training', 'webinar', 'keynote', 'workshop']],
                ['key' => 'air', 'title' => 'On air', 'blurb' => 'Television and radio: the same ideas, compressed into minutes. Good preparation for a longer session —', 'link' => route('speaking-service').'#book', 'linkLabel' => 'invite me to speak →', 'types' => ['media']],
                ['key' => 'community', 'title' => 'Community', 'blurb' => 'Small rooms, plain language, no jargon. Where the teaching gets its honesty —', 'link' => route('story').'#thinking', 'linkLabel' => 'how I think →', 'types' => ['community']],
            ],
            'series' => $series,
            // Every eighth poster: a spread across the whole run, not six from
            // the same month.
            'seriesStrip' => $series
                ? $series['episodes']->values()->filter(fn ($ep, $i) => $i % 8 === 0)->take(6)->values()
                : collect(),
        ]);
    }
}
