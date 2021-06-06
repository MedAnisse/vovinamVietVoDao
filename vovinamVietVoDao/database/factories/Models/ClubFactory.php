<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Club;

class ClubFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Club::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'presidentname' => $this->faker->word,
            'presidentlastname' => $this->faker->word,
            'presidentphone' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->word,
        ];
    }
}
