<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExternalBlogAvailabilityTest extends TestCase
{
    use RefreshDatabase;

    public function test_listed_external_article_still_opens_when_api_is_unavailable(): void
    {
        Cache::forget('blogs.external.fresh');
        Cache::forget('blogs.external.last-success');
        Http::fake(['*' => Http::sequence()->push(['blogs' => [[
            'title' => 'Invisible Aligners Cost in Kerala (2026): Complete Price & Treatment Guide',
            'excerpt' => 'Clear aligner treatment guide',
            'sections' => [['text_content' => 'Full external article content']],
            'created_at' => '2026-10-23 10:00:00',
        ]]])->pushStatus(503)]);

        $slug = 'invisible-aligners-cost-in-kerala-2026-complete-price-treatment-guide';
        $this->get('/blog')->assertOk()->assertSee('/blog/'.$slug, false);
        Cache::forget('blogs.external.fresh');
        $this->get('/blog/'.$slug)->assertOk()->assertSee('Full external article content');
        Http::assertSentCount(2);
    }

    public function test_detail_uses_fresh_snapshot_without_refetching_api(): void
    {
        Cache::forget('blogs.external.fresh');
        Cache::forget('blogs.external.last-success');
        Http::fake(['*' => Http::response(['blogs' => [[
            'title' => 'External aligner guide',
            'excerpt' => 'External guide content',
            'created_at' => '2026-10-23 10:00:00',
        ]]])]);

        $this->get('/blog')->assertOk();
        $this->get('/blog/external-aligner-guide')->assertOk()->assertSee('External guide content');
        Http::assertSentCount(1);
        $this->get('/blog/unknown-article')->assertNotFound();
    }
}
