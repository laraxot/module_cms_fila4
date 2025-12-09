<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

// //use Laravel\Scout\Searchable;
use Modules\Xot\Models\XotBaseModel;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends XotBaseModel
{
    /** @var string */
    protected $connection = 'cms';

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
<<<<<<< HEAD
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
=======
            'published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime',
>>>>>>> a12f125f4a (.)
=======
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
>>>>>>> b93ef594b4 (.)
=======
            'published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime',
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        ];
    }
}
