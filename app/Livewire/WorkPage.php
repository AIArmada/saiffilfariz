<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Work together — talks, programmes, consulting and software | Saiffil Fariz')]
class WorkPage extends Component
{
    public function render()
    {
        return view('livewire.work-page');
    }
}
