<?php

declare(strict_types=1);

namespace Modules\Cms\Database\Factories;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
use Modules\Cms\Models\PageContent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PageContent>
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Cms\Models\PageContent>
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
 */
class PageContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = PageContent::class;
=======
<<<<<<< HEAD
    protected $model = PageContent::class;
=======
    protected $model = \Modules\Cms\Models\PageContent::class;
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
