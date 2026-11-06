<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Consulting — AI and process improvements that stick | Saiffil Fariz')]
class ConsultingPage extends Component
{
    public function render()
    {
        return view('livewire.consulting-page');
    }
}
