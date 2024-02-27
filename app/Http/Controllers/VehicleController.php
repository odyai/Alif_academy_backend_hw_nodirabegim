<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Http\Resources\VehicleResource;
use App\Models\Vehicle;
use Illuminate\Http\JsonResponse;

class VehicleController extends Controller
{
    public function index(): JsonResponse
    {
        $vehicles = Vehicle::all();

        return response()->json([
            'data' => $vehicles
        ]);
    }

    public function store(VehicleRequest $request): VehicleResource
    {
        $validatedData = $request->validated();

        $vehicle = Vehicle::query()->create($validatedData);

        return new VehicleResource($vehicle);
    }

    public function show(Vehicle $vehicle): VehicleResource
    {
        return new VehicleResource($vehicle);
    }

    public function update(VehicleRequest $request, Vehicle $vehicle): VehicleResource
    {
        $validatedData = $request->validated();

        $vehicle->update($validatedData);

        return new VehicleResource($vehicle);
    }

    public function destroy(Vehicle $vehicle): JsonResponse
    {
        $vehicle->delete();

        return response()->json(['message' => 'Record successfully deleted']);
    }
}
