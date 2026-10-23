<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class WritingPage extends Component
{
    public string $pillar = '';

    public string $format = '';

    public string $audience = '';

    public function mount(): void
    {
        $this->pillar = $this->valid(request()->query('pillar'), array_column(config('site.pillars'), 'slug'));
        $this->format = $this->valid(request()->query('format'), config('site.formats'));
        $this->audience = $this->valid(request()->query('for'), config('site.audiences'));
    }

    private function valid(mixed $value, array $allowed): string
    {
        return in_array($value, $allowed, true) ? $value : '';
    }

    public function render()
    {
        $posts = Post::query()
            ->published()
            ->pillar($this->pillar ?: null)
            ->format($this->format ?: null)
            ->audience($this->audience ?: null)
            ->latest('published_at')
            ->get();

        $filtered = $this->pillar || $this->format || $this->audience;

        return view('livewire.writing-page', [
            'posts' => $posts,
            'filtered' => $filtered,
            'total' => Post::query()->published()->count(),
        ]);
    }
}
