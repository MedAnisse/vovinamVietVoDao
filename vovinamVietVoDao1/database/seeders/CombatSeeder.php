<?php

namespace Database\Seeders;

use App\Models\Combat;
use Illuminate\Database\Seeder;

class CombatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Combat::factory()->count(5)->create();
    }
}
