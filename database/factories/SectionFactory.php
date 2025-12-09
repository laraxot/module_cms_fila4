<?php

declare(strict_types=1);

namespace Modules\Cms\Database\Factories;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Cms\Models\Section;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Cms\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Cms\Models\Section;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

/**
 * @extends Factory<Section>
 */
class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Section>
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = [
            'it' => $this->faker->words(2, true),
            'en' => $this->faker->words(2, true),
        ];
<<<<<<< HEAD
        Assert::string($name_en = $name['en'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($name_en = $name['en'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name_en=$name['en']);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($name_en = $name['en'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($name_en=$name['en']);
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $slug = Str::slug($name_en);
        return [
            'name' => $name,
            'slug' => $slug,
            'blocks' => [], // Puoi popolare con dati fittizi se necessario
        ];
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
