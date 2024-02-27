<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationRequest;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use Illuminate\Http\JsonResponse;

class OrganizationController extends Controller
{
    public function index(): JsonResponse
    {
        $organizations = Organization::all();

        return response()->json([
            'data' => $organizations
        ]);
    }

    public function store(OrganizationRequest $request): OrganizationResource
    {
        $validatedData = $request->validated();

        $organization = Organization::query()->create($validatedData);

        return new OrganizationResource($organization);
    }

    public function show(Organization $organization): OrganizationResource
    {
        return new OrganizationResource($organization);
    }

    public function update(OrganizationRequest $request, Organization $organization): OrganizationResource
    {
        $validatedData = $request->validated();

        $organization->update($validatedData);

        return new OrganizationResource($organization);
    }

    public function destroy(Organization $organization): JsonResponse
    {
        $organization->delete();

        return response()->json(['message' => 'Record successfully deleted']);
    }
}
