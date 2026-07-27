<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeoSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_identifier',
        'title',
        'description',
        'keywords',
        'og_image',
        'twitter_card',
        'is_indexable',
        'canonical_url',
    ];

    protected function casts(): array
    {
        return [
            'keywords' => 'array',
            'is_indexable' => 'boolean',
        ];
    }

    public function scopeForIdentifier(Builder $query, string $identifier): Builder
    {
        return $query->where('page_identifier', $identifier);
    }

    public static function resolveForPage(?string $pageIdentifier = null): ?self
    {
        $identifier = static::normalizePageIdentifier($pageIdentifier);

        if ($identifier === '') {
            return null;
        }

        return static::query()->forIdentifier($identifier)->first();
    }

    public static function normalizePageIdentifier(?string $pageIdentifier = null): string
    {
        $identifier = $pageIdentifier;

        if ($identifier === null || $identifier === '') {
            $route = request()->route();
            $identifier = $route?->getName() ?: request()->path();
        }

        $identifier = trim((string) $identifier);
        $identifier = trim($identifier, '/');

        if ($identifier === '') {
            return 'home';
        }

        return Str::of($identifier)->lower()->toString();
    }

    public function getKeywordsStringAttribute(): string
    {
        return collect($this->keywords ?? [])
            ->filter()
            ->map(fn (string $keyword): string => trim($keyword))
            ->implode(', ');
    }

    public function getOgImageUrlAttribute(): ?string
    {
        if (blank($this->og_image)) {
            return null;
        }

        if (Str::startsWith($this->og_image, ['http://', 'https://'])) {
            return $this->og_image;
        }

        return Storage::disk('public')->url($this->og_image);
    }

    public function getRobotsContentAttribute(): string
    {
        return $this->is_indexable ? 'index, follow' : 'noindex, nofollow';
    }
}
