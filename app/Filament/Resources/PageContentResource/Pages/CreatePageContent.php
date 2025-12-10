<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Resources\PageContentResource\Pages;

use Modules\Cms\Filament\Resources\PageContentResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreatePageContent extends XotBaseCreateRecord
{
<<<<<<< HEAD
    // use Translatable; // Temporaneamente commentato per compatibilità Filament 4.x
=======
    use Translatable;
>>>>>>> 3401a6b (.)

    protected static string $resource = PageContentResource::class;
}
