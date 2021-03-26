<?php

namespace Database\Factories;

use App\Models\Holl;
use Illuminate\Database\Eloquent\Factories\Factory;

class HollFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Holl::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'holl_number' => $this->faker->numberBetween($min = 1, $max = 9),
            'name' => $this->faker->words(2, true),               
            'address'=> $this->faker->streetAddress,
            'phone'=> $this->faker->tollFreePhoneNumber,
            'email'=> $this->faker->email,
            'map_link'=>$this->faker->url,
            'timetable_img'=>null,
            'map_img'=>null,
            'map_link'=>$this->faker->url,
            'slug'=> $this->faker->slug,

        ];
    }
}
