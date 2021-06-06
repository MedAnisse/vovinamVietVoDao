<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Arbitre;
use App\Models\Combat;
use App\Models\Entraineur;
use App\Models\Joueur;
use App\Models\Salle;

class CombatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Combat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'round' => $this->faker->numberBetween(-10000, 10000),
            'scoreRed' => $this->faker->numberBetween(-10000, 10000),
            'scoreBlue' => $this->faker->numberBetween(-10000, 10000),
            'entraineurRed' => Entraineur::factory(),
            'entraineurBlue' => Entraineur::factory(),
            'salle_id' => Salle::factory(),
            'joueurBlue' => Joueur::factory(),
            'joueurRed' => Joueur::factory(),
            'arbitre_id' => Arbitre::factory(),
        ];
    }
}
