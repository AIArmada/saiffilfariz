<?php

namespace App\Livewire;

use App\Models\Post;
use App\Support\Engagements;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Saiffil Fariz — Connected intelligence across AI, business and people')]
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
            'recognition' => Engagements::find('matrade-celik-ai-2026-08'),
            'quotes' => [
                [
                    'text' => 'Penyampaian yang menarik, interaktif dan mudah difahami.',
                    'name' => 'MATRADE',
                    'role' => 'Letter of appreciation, 30 September 2026',
                    'url' => route('talk', 'matrade-celik-ai-2026-08'),
                ],
                [
                    'text' => 'Clear, practical and immediately useful. Our team left with clarity and a real plan, not a folder of slides.',
                    'name' => 'Aisyah Rahman',
                    'role' => 'Business owner, Shah Alam',
                    'url' => null,
                ],
            ],
        ]);
    }
}
