<?php

namespace Database\Seeders;

use App\Models\Joueur;
use Illuminate\Database\Seeder;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Joueur::factory()->count(5)->create();
    }
}
