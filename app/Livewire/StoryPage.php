<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('About Saiffil Fariz — from Talking WhizKid to AI, business and people')]
class StoryPage extends Component
{
    public function render()
    {
        return view('livewire.story-page');
    }
}
