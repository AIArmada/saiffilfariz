<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiteRebuildQualityGatesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_recognition_renders_with_letter_link(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('id="recognition"', false)
            ->assertSee('assets/docs/matrade-surat-penghargaan-2026-09-30.pdf', false)
            ->assertSee('All sessions', false);
    }

    public function test_listed_only_engagement_has_no_detail_page(): void
    {
        $this->get('/talks/jpa-pbs-2025-ai')->assertNotFound();
    }

    public function test_talk_detail_carries_the_longer_thread_trail(): void
    {
        $this->get('/talks/matrade-celik-ai-2026-08')
            ->assertOk()
            ->assertSee('part of a longer thread', false)
            ->assertSee('/story#learning', false);
    }

    public function test_series_wall_reports_poster_count_and_filters_by_year(): void
    {
        $this->get('/talks/series/talk-with-ceo')
            ->assertOk()
            ->assertSeeText('72 posters');

        $filtered = $this->get('/talks/series/talk-with-ceo?year=2023')->assertOk();
        $filtered->assertSee('2023', false);
    }

    public function test_every_pillar_offers_a_next_step(): void
    {
        foreach (['code', 'commerce', 'influence', 'education', 'character'] as $pillar) {
            $this->get("/pillars/{$pillar}")
                ->assertOk()
                ->assertSee('From ideas to making.', false);
        }
    }

    public function test_build_page_embeds_an_enquiry_form(): void
    {
        $this->get('/build')->assertOk()->assertSee('Start a project conversation', false);
    }

    public function test_pages_emit_canonical_and_titles(): void
    {
        $this->get('/story')->assertOk()->assertSee('<link rel="canonical"', false);
        $this->get('/talks/matrade-celik-ai-2026-08')
            ->assertOk()
            ->assertSee('Kursus Celik AI', false);
    }

    public function test_image_manifest_covers_every_referenced_asset(): void
    {
        $opt = json_decode(file_get_contents(base_path('public/assets/img/opt/manifest.json')), true);
        $data = json_decode(file_get_contents(base_path('assets/data/engagements.json')), true);

        $missing = [];

        foreach ($data['engagements'] as $entry) {
            if (($entry['status'] ?? 'published') !== 'published') {
                continue;
            }

            if (empty($entry['listed_only'])) {
                if (! isset($opt['talk-'.$entry['slug']])) {
                    $missing[] = 'cover talk-'.$entry['slug'];
                }

                if (! empty($entry['letter']) && ! isset($opt['talk-'.$entry['slug'].'-letter'])) {
                    $missing[] = 'letter talk-'.$entry['slug'].'-letter';
                }
            }

            if (! empty($entry['poster']) && ! isset($opt[$entry['poster']])) {
                $missing[] = 'poster '.$entry['poster'];
            }
        }

        $seriesManifest = json_decode(
            file_get_contents(base_path('public/assets/img/series/talk-with-ceo/manifest.json')), true
        );
        $series = json_decode(file_get_contents(base_path('assets/data/series.json')), true);

        foreach ($series['series'][0]['episodes'] as $episode) {
            if (! isset($seriesManifest[$episode['poster']])) {
                $missing[] = 'series poster '.$episode['poster'];
            }
        }

        $this->assertSame([], $missing, 'Manifest gaps: '.implode(', ', $missing));
    }
}
