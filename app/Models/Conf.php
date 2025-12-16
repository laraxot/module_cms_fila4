<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Illuminate\Database\Eloquent\Builder;
use Modules\Tenant\Actions\Config\GetTenantConfigNamesAction;
use Sushi\Sushi;

/**
 * Modules\Cms\Models\Conf.
 *
 * @property int         $id
 * @property string|null $name
 *
 * @method static Builder<static>|Conf newModelQuery()
 * @method static Builder<static>|Conf newQuery()
 * @method static Builder<static>|Conf query()
 * @method static Builder<static>|Conf whereId($value)
 * @method static Builder<static>|Conf whereName($value)
 * @method static int                  count()
 *
 * <<<<<<< HEAD
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $deleter
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *                                                                =======
 *                                                                <<<<<<< HEAD
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $deleter
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *                                                                =======
 * @property \Modules\TechPlanner\Models\Profile|null    $creator
 * @property \Modules\TechPlanner\Models\Profile|null    $deleter
 * @property \Modules\TechPlanner\Models\Profile|null    $updater
 *                                                                >>>>>>> 46d657c (.)
 *                                                                >>>>>>> 555d679 (.)
 *
 * @method static \Modules\Cms\Database\Factories\ConfFactory factory($count = null, $state = [])
 *
 * @mixin \Eloquent
 */
class Conf extends BaseModel
{
    use Sushi;

    /** @var list<string> */
    protected $fillable = [
<<<<<<< HEAD
        'id',
        'name',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'id',
        'name',
=======
        'id', 'name',
>>>>>>> a12f125f4a (.)
=======
        'id',
        'name',
>>>>>>> b93ef594b4 (.)
=======
        'id', 'name',
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    ];

    /**
     * @return array<int, array{id: int, name: string}>
     */
    public function getRows(): array
    {
        /** @var array<int, array{id: int, name: string}> $configNames */
        $configNames = app(GetTenantConfigNamesAction::class)->execute();

        return $configNames;
    }

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
     * protected function sushiShouldCache() {
     * return false;
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    protected function sushiShouldCache() {
        return false;
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    /**
     * Undocumented function.
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
