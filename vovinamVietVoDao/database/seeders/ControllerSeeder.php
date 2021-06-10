<?php

namespace Database\Seeders;

use App\Models\Controller;
use Illuminate\Database\Seeder;

class ControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Controller::factory()->count(5)->create();
    }
}
