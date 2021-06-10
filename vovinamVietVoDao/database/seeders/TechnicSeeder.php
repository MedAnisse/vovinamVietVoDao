<?php

namespace Database\Seeders;

use App\Models\Technic;
use Illuminate\Database\Seeder;

class TechnicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technic::factory()->count(5)->create();
    }
}
