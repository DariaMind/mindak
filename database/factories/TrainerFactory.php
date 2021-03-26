<?php

namespace Database\Factories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trainer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'img'=>null,
            'name'=>$this->faker->name($gender = 'female'),
            'description'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'slug'=>$this->faker->slug,
        ];
    }
}
