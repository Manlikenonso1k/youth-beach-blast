<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\JsonResponse;

class SeoController extends Controller
{
    /**
     * Return SEO metadata for a given page identifier.
     */
    public function show(string $page): JsonResponse
    {
        $seo = SeoSetting::resolveForPage($page);

        if (! $seo) {
            return response()->json([
                'title' => config('app.name', 'Youth Beach Blast 2026'),
                'description' => null,
                'keywords' => null,
                'og_image' => null,
                'twitter_card' => 'summary_large_image',
                'robots' => 'index, follow',
                'canonical_url' => url()->current(),
            ]);
        }

        return response()->json([
            'title' => $seo->title ?: config('app.name'),
            'description' => $seo->description,
            'keywords' => $seo->keywords_string,
            'og_image' => $seo->og_image_url,
            'twitter_card' => $seo->twitter_card ?: 'summary_large_image',
            'robots' => $seo->robots_content,
            'canonical_url' => $seo->canonical_url ?: url()->current(),
        ]);
    }
}
