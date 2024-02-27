<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuelSensorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'model' => 'required|string|max:255',
            'fuel_type' => 'required|string|max:255',
            'fuel_level' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'model.*' => 'The model field is required and must be a string with a maximum length of 255 characters.',
            'fuel_type.*' => 'The fuel_type field is required and must be a string with a maximum length of 255 characters.',
            'fuel_level.*' => 'The fuel_level field is required and must be a numeric value.',
        ];
    }
}
