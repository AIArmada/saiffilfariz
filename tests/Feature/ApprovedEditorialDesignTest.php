<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApprovedEditorialDesignTest extends TestCase
{
    use RefreshDatabase;

    public function test_six_primary_destinations_keep_their_routes_and_design_identity(): void
    {
        $pages = [
            '/' => ['v3-page--home', 'Different worlds.'],
            '/story' => ['v3-page--story', 'A curious mind, through different chapters of life.'],
            '/creations' => ['v3-page--work', 'Ideas into'],
            '/speaking' => ['v3-page--speaking', 'Share. Teach.'],
            '/ideas' => ['v3-page--ideas', 'Thoughts, lessons and'],
            '/work' => ['v3-page--contact', 'Let’s build something useful together.'],
        ];

        foreach ($pages as $path => [$pageClass, $headline]) {
            $this->get($path)
                ->assertOk()
                ->assertSee($pageClass, false)
                ->assertSee($headline, false)
                ->assertSee('aria-label="Primary navigation"', false)
                ->assertSee('aria-label="Site menu"', false);
        }
    }

    public function test_mobile_first_navigation_preserves_canonical_destinations(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('href="'.route('story').'"', false)
            ->assertSee('href="'.route('creations').'"', false)
            ->assertSee('href="'.route('speaking').'"', false)
            ->assertSee('href="'.route('ideas').'"', false)
            ->assertSee('href="'.route('work').'"', false)
            ->assertSee('data-burger', false);
    }

    public function test_home_uses_approved_visual_structure_without_unverified_testimonial(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('v3-journey__steps', false)
            ->assertSee('v3-pillars__grid', false)
            ->assertSee('v3-home-portrait', false)
            ->assertDontSee('Aisyah Rahman')
            ->assertDontSee('Next programme')
            ->assertDontSee('Reserve a seat');
    }

    public function test_work_together_keeps_the_live_enquiry_form(): void
    {
        $this->get('/work')
            ->assertOk()
            ->assertSee('id="enquire"', false)
            ->assertSee('Ways we can collaborate', false)
            ->assertSee('Tell me about your idea.', false);
    }

    public function test_approved_artwork_keys_exist_in_optimized_asset_manifest(): void
    {
        $manifest = json_decode(
            file_get_contents(base_path('public/assets/img/opt/manifest.json')),
            true,
            flags: JSON_THROW_ON_ERROR,
        );

        foreach ([
            'purpose-mountain',
            'home-editorial-portrait',
            'story-saiffil-whizkid-1989-v1',
            'pillar-code',
            'profile-charcoalgrey',
        ] as $asset) {
            $this->assertArrayHasKey($asset, $manifest, "Missing approved design asset: {$asset}");
        }
    }
}
