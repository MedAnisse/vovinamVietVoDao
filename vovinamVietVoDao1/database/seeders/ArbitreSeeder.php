<?php

namespace Database\Seeders;

use App\Models\Arbitre;
use Illuminate\Database\Seeder;

class ArbitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arbitre::factory()->count(5)->create();
    }
}
