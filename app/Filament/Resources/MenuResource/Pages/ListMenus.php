<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Resources\MenuResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Tables;
=======
use Filament\Tables;
use Filament\Actions\CreateAction;
>>>>>>> 3401a6b (.)
=======
use Filament\Actions\CreateAction;
use Filament\Tables;
>>>>>>> 1377a46 (.)
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
class ListMenus extends XotBaseListRecords
{
    /**
     * Get list table columns.
     *
     * @return array<Tables\Columns\Column>
     */
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('title'),
        ];
    }
    // protected static string $resource = MenuResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
