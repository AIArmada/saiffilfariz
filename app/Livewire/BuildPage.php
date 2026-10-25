<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Custom software, apps and systems | Saiffil Fariz')]
class BuildPage extends Component
{
    public function render(): View
    {
        return view('livewire.build-page');
    }
}
