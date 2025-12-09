<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Fields;

use Filament\Forms\Components\Builder;

class LeftSidebarContent
{
<<<<<<< HEAD
    public static function make(string $name, string $_context = 'form'): Builder
    {
        return Builder::make($name)->blocks([])->collapsible();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function make(string $name, string $_context = 'form'): Builder
    {
        return Builder::make($name)->blocks([])->collapsible();
=======
=======
>>>>>>> origin/develop
    public static function make(
        string $name,
        string $context = 'form',
    ): Builder {
        return Builder::make($name)
            ->blocks([
            ])
            ->collapsible();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public static function make(string $name, string $_context = 'form'): Builder
    {
        return Builder::make($name)->blocks([])->collapsible();
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    }
}
