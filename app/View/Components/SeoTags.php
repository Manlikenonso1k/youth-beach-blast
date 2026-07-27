<?php

namespace App\View\Components;

use App\Models\SeoSetting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeoTags extends Component
{
    public function __construct(public ?string $page = null)
    {
    }

    public function render(): View|Closure|string
    {
        $pageIdentifier = SeoSetting::normalizePageIdentifier($this->page);

        return view('components.seo-tags', [
            'pageIdentifier' => $pageIdentifier,
            'seoSetting' => SeoSetting::resolveForPage($pageIdentifier),
        ]);
    }
}
