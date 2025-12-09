<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Resources\MenuResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Tables;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Tables;
=======
use Filament\Tables;
use Filament\Actions\CreateAction;
>>>>>>> a12f125f4a (.)
=======
use Filament\Actions\CreateAction;
use Filament\Tables;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Tables;
use Filament\Actions\CreateAction;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
use Filament\Tables\Columns\TextColumn;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
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
<<<<<<< HEAD
            TextColumn::make('title'),
=======
<<<<<<< HEAD
            TextColumn::make('title'),
=======
            Tables\Columns\TextColumn::make('title'),
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
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
