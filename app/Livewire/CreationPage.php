<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Project story | Saiffil Fariz')]
class CreationPage extends Component
{
    #[Locked]
    public array $creation = [];

    public function mount(string $slug): void
    {
        $stories = config('site.creations.stories');

        abort_unless(isset($stories[$slug]), 404);

        $this->creation = $stories[$slug];
    }

    public function render(): View
    {
        return view('livewire.creation-page', [
            'creation' => $this->creation,
        ]);
    }
}
