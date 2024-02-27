<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuelSensorRequest;
use App\Http\Resources\FuelSensorResource;
use App\Models\FuelSensor;
use Illuminate\Http\JsonResponse;

class FuelSensorController extends Controller
{
    public function index(): JsonResponse
    {
        $fuelSensors = FuelSensor::all();

        return response()->json([
            'data' => $fuelSensors
        ]);
    }

    public function store(FuelSensorRequest $request): FuelSensorResource
    {
        $validatedData = $request->validated();

        $fuelSensor = FuelSensor::query()->create($validatedData);

        return new FuelSensorResource($fuelSensor);
    }

    public function show(FuelSensor $fuelSensor): FuelSensorResource
    {
        return new FuelSensorResource($fuelSensor);
    }

    public function update(FuelSensorRequest $request, FuelSensor $fuelSensor): FuelSensorResource
    {
        $validatedData = $request->validated();

        $fuelSensor->update($validatedData);

        return new FuelSensorResource($fuelSensor);
    }

    public function destroy(FuelSensor $fuelSensor): JsonResponse
    {
        $fuelSensor->delete();

        return response()->json(['message' => 'Record successfully deleted']);
    }
}
