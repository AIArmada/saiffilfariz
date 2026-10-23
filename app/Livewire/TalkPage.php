<?php

namespace App\Livewire;

use App\Support\Engagements;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class TalkPage extends Component
{
    /**
     * Named $engagement, not $talk: Livewire assigns route parameters to
     * same-named public properties, and {talk} is a string while this holds
     * the whole record.
     */
    public array $engagement = [];

    public function mount(string $talk): void
    {
        $found = Engagements::find($talk);

        abort_unless($found, 404);
        abort_if($found['listed_only'], 404);

        $this->engagement = $found;
    }

    public function render()
    {
        $withPhotos = Engagements::all()->reject(fn (array $row) => $row['listed_only'])->values();
        $index = $withPhotos->search(fn (array $row) => $row['slug'] === $this->engagement['slug']);

        return view('livewire.talk-page', [
            'engagement' => $this->engagement,
            'next' => $withPhotos->get($index + 1),
            'previous' => $index > 0 ? $withPhotos->get($index - 1) : null,
        ]);
    }
}
