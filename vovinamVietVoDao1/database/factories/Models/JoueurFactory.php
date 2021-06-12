<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Club;
use App\Models\Joueur;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

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
            'birthdate' => $this->faker->date(),
            'poid' => $this->faker->word,
            'club_id' => Club::factory(),
            'technique' => '{}',
        ];
    }
}
