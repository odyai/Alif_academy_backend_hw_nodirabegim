<?php

namespace Database\Factories;

use App\Models\FuelSensor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuelSensorFactory extends Factory
{
    protected $model = FuelSensor::class;

    public function definition(): array
    {
        return [
            'model' => $this->faker->word,
            'fuel_type' => $this->faker->word,
            'fuel_level' => $this->faker->randomFloat(2, 0, 100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
