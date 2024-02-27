<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'fuel_type' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'make.*' => 'The make field is required and must be a string with a maximum length of 255 characters.',
            'model.*' => 'The model field is required and must be a string with a maximum length of 255 characters.',
            'year.*' => 'The year field is required and must be a string with a maximum length of 4 characters.',
            'fuel_type.*' => 'The fuel_type field is required and must be a string with a maximum length of 255 characters.',
        ];
    }
}
