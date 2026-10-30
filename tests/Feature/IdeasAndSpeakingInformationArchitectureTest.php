<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class IdeasAndSpeakingInformationArchitectureTest extends TestCase
{
    use RefreshDatabase;

    public function test_ideas_and_speaking_archives_are_canonical_pages(): void
    {
        $this->get('/ideas')->assertOk()->assertSee('<h1>Ideas</h1>', false);
        $this->get('/speaking')->assertOk()->assertSee('<h1>Speaking</h1>', false);
        $this->get('/work/speaking')->assertOk()->assertSee('<h1>Speaking and workshops</h1>', false);
    }

    public function test_legacy_writing_index_redirects_with_its_filters(): void
    {
        $this->get('/writing?pillar=code&format=Essay&for=Team')
            ->assertRedirect('/ideas?pillar=code&format=Essay&for=Team');
    }

    public function test_legacy_article_address_redirects_to_ideas_path(): void
    {
        DB::table('posts')->insert([
            'slug' => 'a-useful-idea',
            'title' => 'A useful idea',
            'dek' => 'A short description',
            'body' => 'A short article.',
            'pillar' => 'code',
            'format' => 'Essay',
            'audience' => 'Team',
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->get('/writing/a-useful-idea')->assertRedirect('/ideas/a-useful-idea');
        $this->get('/ideas/a-useful-idea')
            ->assertOk()
            ->assertSee('<span aria-hidden="true">←</span> Ideas', false)
            ->assertSee('<h1>A useful idea</h1>', false);
    }

    public function test_legacy_talks_index_redirects_to_speaking_archive(): void
    {
        $this->get('/talks')->assertRedirect('/speaking');
    }
}
