<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoSettingResource\Pages;
use App\Models\SeoSetting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class SeoSettingResource extends Resource
{
    protected static ?string $model = SeoSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass-circle';

    protected static ?string $navigationLabel = 'SEO';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('General SEO Info')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('page_identifier')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Use a stable key like home, about, events, or a URL path fragment.')
                            ->unique(ignoreRecord: true),
                        TextInput::make('title')
                            ->maxLength(60)
                            ->helperText('Recommended: keep meta titles around 50-60 characters.'),
                    ]),
                    Textarea::make('description')
                        ->rows(4)
                        ->maxLength(160)
                        ->helperText('Recommended: 150-160 characters for meta descriptions.'),
                    Textarea::make('keywords')
                        ->rows(3)
                        ->helperText('Enter comma-separated keywords. They will be stored as JSON.')
                        ->afterStateHydrated(function (Textarea $component, mixed $state): void {
                            $component->state(is_array($state) ? implode(', ', $state) : $state);
                        })
                        ->dehydrateStateUsing(function (?string $state): ?array {
                            if (blank($state)) {
                                return null;
                            }

                            return collect(explode(',', $state))
                                ->map(fn (string $keyword): string => trim($keyword))
                                ->filter()
                                ->values()
                                ->all();
                        }),
                ]),
            Section::make('Social Media & OpenGraph')
                ->schema([
                    Grid::make(2)->schema([
                        FileUpload::make('og_image')
                            ->image()
                            ->disk('public')
                            ->directory('seo/og-images')
                            ->visibility('public')
                            ->imagePreviewHeight('240')
                            ->helperText('Upload a 1200 x 630 image for social sharing.'),
                        Select::make('twitter_card')
                            ->options([
                                'summary' => 'Summary',
                                'summary_large_image' => 'Summary Large Image',
                                'app' => 'App',
                                'player' => 'Player',
                            ])
                            ->default('summary_large_image')
                            ->required(),
                    ]),
                ]),
            Section::make('Indexing & Advanced Settings')
                ->schema([
                    Grid::make(2)->schema([
                        Toggle::make('is_indexable')
                            ->label('Indexable')
                            ->default(true)
                            ->helperText('Disable to emit noindex, nofollow robots tags.'),
                        TextInput::make('canonical_url')
                            ->url()
                            ->maxLength(255)
                            ->helperText('Leave empty to use the current page URL.'),
                    ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_identifier')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_indexable')
                    ->boolean()
                    ->label('Indexable'),
                ImageColumn::make('og_image')
                    ->disk('public')
                    ->square()
                    ->label('OG Image'),
            ])
            ->filters([
                TernaryFilter::make('is_indexable')
                    ->label('Indexable status'),
            ])
            ->defaultSort('page_identifier');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeoSettings::route('/'),
            'create' => Pages\CreateSeoSetting::route('/create'),
            'edit' => Pages\EditSeoSetting::route('/{record}/edit'),
        ];
    }
}
