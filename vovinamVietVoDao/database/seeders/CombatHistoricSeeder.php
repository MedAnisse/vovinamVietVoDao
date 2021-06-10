<?php

namespace Database\Seeders;

use App\Models\CombatHistoric;
use Illuminate\Database\Seeder;

class CombatHistoricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CombatHistoric::factory()->count(5)->create();
    }
}
