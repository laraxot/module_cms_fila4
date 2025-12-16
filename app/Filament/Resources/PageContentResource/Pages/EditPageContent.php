<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Resources\PageContentResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Modules\Cms\Filament\Resources\PageContentResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditPageContent extends XotBaseEditRecord
{
<<<<<<< HEAD
<<<<<<< HEAD
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
=======
    use Translatable;
>>>>>>> 3401a6b (.)
=======
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 1377a46 (.)

    protected static string $resource = PageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            LocaleSwitcher::make(),
        ];
    }
}
