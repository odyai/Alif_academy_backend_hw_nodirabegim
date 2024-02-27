<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
//    public function toArray(Request $request): array
//    {
//        return [
//            'id' => $this->resource->id,
//            'make' => $this->resource->make,
//            'model' => $this->resource->model,
//            'year' => $this->resource->year,
//            'fuel_type' => $this->resource->fuel_type,
//            'created_at' => $this->resource->created_at,
//            'updated_at' => $this->resource->updated_at,
//        ];
//    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'fuel_type' => $this->fuel_type,

        ];
    }
}
