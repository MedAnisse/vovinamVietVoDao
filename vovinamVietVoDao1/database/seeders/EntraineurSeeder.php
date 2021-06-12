<?php

namespace Database\Seeders;

use App\Models\Entraineur;
use Illuminate\Database\Seeder;

class EntraineurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entraineur::factory()->count(5)->create();
    }
}
