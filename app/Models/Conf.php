<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Modules\Tenant\Actions\Config\GetTenantConfigNamesAction;
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Tenant\Services\TenantService;
>>>>>>> c18bda2 (.)
use Sushi\Sushi;

/**
 * Modules\Cms\Models\Conf.
 *
 * @property int         $id
 * @property string|null $name
<<<<<<< HEAD
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
=======
 * @method static Builder|Conf newModelQuery()
 * @method static Builder|Conf newQuery()
 * @method static Builder|Conf query()
 * @method static Builder|Conf whereId($value)
 * @method static Builder|Conf whereName($value)
 * @mixin IdeHelperConf
>>>>>>> c18bda2 (.)
 * @mixin \Eloquent
 */
class Conf extends Model
{
    use Sushi;

    /** @var list<string> */
    protected $fillable = [
        'id',
        'name',
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
     * protected function sushiShouldCache() {
     * return false;
     * }
     */
    /**
     * Undocumented function.
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
