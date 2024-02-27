<?php

// app/DTOs/VehicleDTO.php

namespace App\DTO;

use App\Models\Vehicle;

class VehicleDTO
{
    public string $make;
    public string $model;
    public string $year;
    public string $fuel_type;

    public function __construct(string $make, string $model, string $year, string $fuel_type)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->fuel_type = $fuel_type;
    }

    public static function fromModel(Vehicle $vehicle): self
    {
        return new self(
            $vehicle->make,
            $vehicle->model,
            $vehicle->year,
            $vehicle->fuel_type
        );
    }
}

