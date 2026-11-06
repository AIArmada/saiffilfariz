<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Programmes — practical AI classes for individuals and teams | Saiffil Fariz')]
class ProgrammesPage extends Component
{
    public function render()
    {
        return view('livewire.programmes-page', [
            'programmes' => config('site.programmes'),
        ]);
    }
}
