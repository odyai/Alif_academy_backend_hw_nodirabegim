<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FuelSensorSeeder extends Seeder
{
    public function run()
    {
        \App\Models\FuelSensor::factory(500)->create();
    }
}
