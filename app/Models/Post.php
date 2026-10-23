<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'published_at' => 'datetime',
        'featured' => 'boolean',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function scopePillar(Builder $query, ?string $slug): Builder
    {
        return $slug ? $query->where('pillar', $slug) : $query;
    }

    public function scopeFormat(Builder $query, ?string $value): Builder
    {
        return $value ? $query->where('format', $value) : $query;
    }

    public function scopeAudience(Builder $query, ?string $value): Builder
    {
        return $value ? $query->where('audience', $value) : $query;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /** Rendered body. Markdown in, HTML out. */
    public function html(): string
    {
        return Str::markdown($this->body, [
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
    }

    public function pillarName(): string
    {
        return Str::headline($this->pillar);
    }

    public function url(): string
    {
        return route('article', $this->slug);
    }

    public function dateLabel(): string
    {
        return $this->published_at?->format('j F Y') ?? '';
    }
}
