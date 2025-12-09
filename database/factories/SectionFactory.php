<?php

declare(strict_types=1);

namespace Modules\Cms\Database\Factories;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1377a46 (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Cms\Models\Section;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\Cms\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 3401a6b (.)
=======
>>>>>>> 1377a46 (.)

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
<<<<<<< HEAD
        Assert::string($name_en = $name['en'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
        Assert::string($name_en=$name['en']);
>>>>>>> 3401a6b (.)
=======
        Assert::string($name_en = $name['en'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 1377a46 (.)
        $slug = Str::slug($name_en);
        return [
            'name' => $name,
            'slug' => $slug,
            'blocks' => [], // Puoi popolare con dati fittizi se necessario
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> 3401a6b (.)
=======
}
>>>>>>> 1377a46 (.)
