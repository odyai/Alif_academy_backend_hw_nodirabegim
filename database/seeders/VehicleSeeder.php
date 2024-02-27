<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Vehicle::factory(500)->create();
    }
}
