<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Support\Engagements;
use App\Support\Series;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function sitemap(): Response
    {
        $urls = collect([
            ['loc' => route('home'), 'priority' => '1.0'],
            ['loc' => route('story'), 'priority' => '0.8'],
            ['loc' => route('work'), 'priority' => '0.8'],
            ['loc' => route('speaking-service'), 'priority' => '0.9'],
            ['loc' => route('speaking'), 'priority' => '0.9'],
            ['loc' => route('programmes'), 'priority' => '0.7'],
            ['loc' => route('consulting'), 'priority' => '0.7'],
            ['loc' => route('build'), 'priority' => '0.7'],
            ['loc' => route('creations'), 'priority' => '0.7'],
            ['loc' => route('ideas'), 'priority' => '0.8'],
        ]);

        foreach (Engagements::all()->reject(fn (array $row) => $row['listed_only']) as $talk) {
            $urls->push(['loc' => $talk['url'], 'priority' => '0.6']);
        }

        if ($series = Series::first()) {
            $urls->push(['loc' => $series['url'], 'priority' => '0.6']);
        }

        foreach (Post::query()->published()->latest('published_at')->get() as $post) {
            $urls->push([
                'loc' => $post->url(),
                'priority' => '0.6',
                'lastmod' => $post->published_at->toDateString(),
            ]);
        }

        foreach (config('site.creations.stories', []) as $slug => $story) {
            $urls->push(['loc' => route('creation', $slug), 'priority' => '0.5']);
        }

        foreach (config('site.pillars', []) as $pillar) {
            $urls->push(['loc' => route('pillar', $pillar['slug']), 'priority' => '0.5']);
        }

        $xml = view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }

    public function feed(): Response
    {
        $posts = Post::query()->published()->latest('published_at')->take(20)->get();

        $xml = view('feed', ['posts' => $posts])->render();

        return response($xml, 200, ['Content-Type' => 'application/rss+xml']);
    }
}
