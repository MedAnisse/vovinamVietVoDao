<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Arbitre;
use App\Models\CombatHistoric;
use App\Models\Controller;
use App\Models\Entraineur;
use App\Models\Joueur;
use App\Models\Juge;
use App\Models\Salle;

class CombatHistoricFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CombatHistoric::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'joueurBlue' => Joueur::factory(),
            'scoreBlue' => $this->faker->numberBetween(-10000, 10000),
            'entraineurBlue' => Entraineur::factory(),
            'controllerBlue' => Controller::factory(),
            'jugeBlue' => Juge::factory(),
            'joueurRed' => Joueur::factory(),
            'scoreRed' => $this->faker->numberBetween(-10000, 10000),
            'entraineurRed' => Entraineur::factory(),
            'controllerRed' => Controller::factory(),
            'jugeRed' => Juge::factory(),
            'arbitre_id' => Arbitre::factory(),
            'date' => $this->faker->date(),
            'salle_id' => Salle::factory(),
        ];
    }
}
