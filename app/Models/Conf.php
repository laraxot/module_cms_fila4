<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Illuminate\Database\Eloquent\Builder;
use Modules\Tenant\Services\TenantService;
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
 * @property \Modules\TechPlanner\Models\Profile|null $creator
 * @property \Modules\TechPlanner\Models\Profile|null $deleter
 * @property \Modules\TechPlanner\Models\Profile|null $updater
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
<<<<<<< HEAD
        'id',
        'name',
=======
        'id', 'name',
>>>>>>> 3401a6b (.)
=======
        'id',
        'name',
>>>>>>> 1377a46 (.)
    ];

    /**
     * @return array<int, array{id: int, name: string}>
     */
    public function getRows(): array
    {
        //  local/ptvx
        /** @var array<int, array{id: int, name: string}> $configNames */
        $configNames = TenantService::getConfigNames();

        return $configNames;
    }

    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
     * protected function sushiShouldCache() {
     * return false;
     * }
     */
<<<<<<< HEAD
=======
    protected function sushiShouldCache() {
        return false;
    }
    */
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)
    /**
     * Undocumented function.
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
