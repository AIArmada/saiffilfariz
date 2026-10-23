<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class HomePage extends Component
{
    public function render()
    {
        $featured = Post::query()->published()->where('featured', true)->latest('published_at')->first()
            ?? Post::query()->published()->latest('published_at')->first();

        $latest = Post::query()
            ->published()
            ->when($featured, fn ($query) => $query->where('id', '!=', $featured->id))
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('livewire.home-page', [
            'featured' => $featured,
            'latest' => $latest,
        ]);
    }
}
