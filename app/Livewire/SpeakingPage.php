<?php

namespace App\Livewire;

use App\Support\Engagements;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Speaking and workshops | Saiffil Fariz')]
class SpeakingPage extends Component
{
    public function render()
    {
        return view('livewire.speaking-page', [
            'talks' => Engagements::featured(2),
            'talkCount' => Engagements::all()->count(),
        ]);
    }
}
