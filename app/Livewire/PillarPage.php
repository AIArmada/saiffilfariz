<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class PillarPage extends Component
{
    /**
     * Named $shelf rather than $pillar on purpose: Livewire assigns route
     * parameters to same-named public properties, and {pillar} is a string
     * while this needs to hold the whole config array.
     */
    public array $shelf = [];

    public function mount(string $pillar): void
    {
        $found = collect(config('site.pillars'))->firstWhere('slug', $pillar);

        abort_unless($found, 404);

        $this->shelf = $found;
    }

    public function render()
    {
        $posts = Post::query()
            ->published()
            ->where('pillar', $this->shelf['slug'])
            ->latest('published_at')
            ->get();

        $others = collect(config('site.pillars'))->where('slug', '!=', $this->shelf['slug']);

        return view('livewire.pillar-page', [
            'posts' => $posts,
            'others' => $others,
        ]);
    }
}
