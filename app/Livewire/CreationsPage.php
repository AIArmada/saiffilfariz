<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Creations: music, films, websites and experiments | Saiffil Fariz')]
class CreationsPage extends Component
{
    public function render(): View
    {
        return view('livewire.creations-page');
    }
}
