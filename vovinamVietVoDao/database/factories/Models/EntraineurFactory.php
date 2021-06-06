<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Club;
use App\Models\Entraineur;

class EntraineurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entraineur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastName' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'club_id' => Club::factory(),
        ];
    }
}
