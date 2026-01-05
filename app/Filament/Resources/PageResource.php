<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Modules\Cms\Filament\Fields\PageContentBuilder;
use Modules\Cms\Models\Page;
use Modules\Lang\Filament\Resources\LangBaseResource;

/**
 * @property Page $record
 */
class PageResource extends LangBaseResource
{
    protected static ?string $model = Page::class;

    #[\Override]
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('title')
                ->required()
                ->lazy()
                ->afterStateUpdated(static function (Set $set, Get $get, string $state): void {
                    if ($get('slug')) {
                        return;
                    }
                    $set('slug', Str::slug($state));
                }),
            TextInput::make('slug')
                ->required()
                // ->unique(ignoreRecord: true)
                ->afterStateUpdated(static fn (Set $set, string $state) => $set('slug', Str::slug($state))),
            Section::make('Content')->schema([
                PageContentBuilder::make('content_blocks')->columnSpanFull(),
            ]),
            Section::make('Sidebar')->schema([
                PageContentBuilder::make('sidebar_blocks')->columnSpanFull(),
            ]),
            Section::make('Footer')->schema([
                PageContentBuilder::make('footer_blocks')->columnSpanFull(),
            ]),
        ];
    }
}
