<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ArticlePage extends Component
{
    public Post $post;

    public function mount(Post $post): void
    {
        abort_unless($post->published_at && $post->published_at->isPast(), 404);

        $this->post = $post;
    }

    public function render()
    {
        $related = Post::query()
            ->published()
            ->where('id', '!=', $this->post->id)
            ->where(function ($q) {
                $q->where('pillar', $this->post->pillar)
                    ->orWhere('audience', $this->post->audience);
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('livewire.article-page', [
            'post' => $this->post,
            'related' => $related,
        ]);
    }
}
