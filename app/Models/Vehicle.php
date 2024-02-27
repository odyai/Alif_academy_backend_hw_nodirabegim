<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['make', 'model', 'year', 'fuel_type'];
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function fuelSensors(): HasMany
    {
        return $this->hasMany(FuelSensor::class);
    }

}
