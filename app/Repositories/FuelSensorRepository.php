<?php

// app/Repositories/FuelSensorRepository.php

namespace App\Repositories;

use App\Interfaces\IUserRepository;
use App\Models\FuelSensor;
use App\Interfaces\IFuelSensorRepository;

class FuelSensorRepository implements IFuelSensorRepository
{
    public function getAll()
    {
        return FuelSensor::all();
    }

    public function getById($id)
    {
        return FuelSensor::find($id);
    }

    public function create(array $data)
    {
        return FuelSensor::create($data);
    }

    public function update($id, array $data)
    {
        $fuelSensor = FuelSensor::find($id);
        $fuelSensor->update($data);
        return $fuelSensor;
    }

    public function delete($id)
    {
        $fuelSensor = FuelSensor::find($id);
        if ($fuelSensor) {
            $fuelSensor->delete();
            return true;
        }
        return false;
    }
}

