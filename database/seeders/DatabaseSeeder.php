<?php

use Database\Seeders\FuelSensorSeeder;
use Database\Seeders\OrganizationSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\VehicleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            OrganizationSeeder::class,
            FuelSensorSeeder::class,
            VehicleSeeder::class,
        ]);
    }
}
