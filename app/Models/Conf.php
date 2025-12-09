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
        'id', 'name',
>>>>>>> 3401a6b (.)
    ];

    /**
     * @return array<string, mixed>
     */
    public function getRows(): array
    {
        //  local/ptvx
        /* @var array<string, mixed> */
        return TenantService::getConfigNames();
    }

    /*
<<<<<<< HEAD
     * protected function sushiShouldCache() {
     * return false;
     * }
     */
=======
    protected function sushiShouldCache() {
        return false;
    }
    */
>>>>>>> 3401a6b (.)
    /**
     * Undocumented function.
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
