<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Arbitre;
use App\Models\Combat;
use App\Models\ControllerBleu;
use App\Models\ControllerRed;
use App\Models\EntraineurBleu;
use App\Models\EntraineurRed;
use App\Models\JoueurBleu;
use App\Models\JoueurRed;
use App\Models\JugeBleu;
use App\Models\JugeRed;
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
            'joueurBleu' => JoueurBleu::factory(),
            'entraineurBleu' => EntraineurBleu::factory(),
            'jugeBleu' => JugeBleu::factory(),
            'controllerBleu' => ControllerBleu::factory(),
            'scoreBlue' => $this->faker->numberBetween(-10000, 10000),
            'scoreRed' => $this->faker->numberBetween(-10000, 10000),
            'joueurRed' => JoueurRed::factory(),
            'entraineurRed' => EntraineurRed::factory(),
            'controllerRed' => ControllerRed::factory(),
            'jugeRed' => JugeRed::factory(),
            'arbitre_id' => Arbitre::factory(),
            'date' => $this->faker->date(),
            'salle_id' => Salle::factory(),
        ];
    }
}
