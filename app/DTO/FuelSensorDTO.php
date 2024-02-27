<?php

namespace App\DTO;

use App\Models\FuelSensor;

class FuelSensorDTO
{
    public string $model;
    public string $fuel_type;
    public float $fuel_level;

    public function __construct(string $model, string $fuel_type, float $fuel_level)
    {
        $this->model = $model;
        $this->fuel_type = $fuel_type;
        $this->fuel_level = $fuel_level;
    }

    public static function fromModel(FuelSensor $fuelSensor): self
    {
        return new self(
            $fuelSensor->model,
            $fuelSensor->fuel_type,
            $fuelSensor->fuel_level
        );
    }
}
