<?php



namespace App\Repositories;

use App\Models\Vehicle;
use App\Interfaces\IVehicleRepository;

class VehicleRepository implements IVehicleRepository
{
    public function getAll()
    {
        return Vehicle::all();
    }

    public function getById($id)
    {
        return Vehicle::find($id);
    }

    public function create(array $data)
    {
        return Vehicle::create($data);
    }

    public function update($id, array $data)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->update($data);
        return $vehicle;
    }

    public function delete($id)
    {
        $vehicle = Vehicle::find($id);
        if ($vehicle) {
            $vehicle->delete();
            return true;
        }
        return false;
    }
}
