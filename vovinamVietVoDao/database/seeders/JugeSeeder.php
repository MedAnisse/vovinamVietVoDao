<?php

namespace Database\Seeders;

use App\Models\Juge;
use Illuminate\Database\Seeder;

class JugeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Juge::factory()->count(5)->create();
    }
}
