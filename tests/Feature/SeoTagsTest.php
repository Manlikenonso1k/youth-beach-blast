<?php

namespace Tests\Feature;

use App\Models\SeoSetting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeoTagsTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_renders_seo_tags_for_a_configured_page(): void
    {
        SeoSetting::query()->create([
            'page_identifier' => 'home',
            'title' => 'Beach Blast SEO Title',
            'description' => 'This is a short description for the home page SEO test.',
            'keywords' => ['beach', 'festival', 'seo'],
            'og_image' => 'seo/test-image.jpg',
            'twitter_card' => 'summary_large_image',
            'is_indexable' => false,
            'canonical_url' => 'https://example.com/home',
        ]);

        $html = view('components.seo-tags', [
            'pageIdentifier' => 'home',
            'seoSetting' => SeoSetting::resolveForPage('home'),
        ])->render();

        $this->assertStringContainsString('<title>Beach Blast SEO Title</title>', $html);
        $this->assertStringContainsString('name="description" content="This is a short description for the home page SEO test."', $html);
        $this->assertStringContainsString('name="keywords" content="beach, festival, seo"', $html);
        $this->assertStringContainsString('name="robots" content="noindex, nofollow"', $html);
        $this->assertStringContainsString('rel="canonical" href="https://example.com/home"', $html);
        $this->assertStringContainsString('property="og:title" content="Beach Blast SEO Title"', $html);
        $this->assertStringContainsString('property="og:image" content="http', $html);
        $this->assertStringContainsString('name="twitter:card" content="summary_large_image"', $html);
    }
}
