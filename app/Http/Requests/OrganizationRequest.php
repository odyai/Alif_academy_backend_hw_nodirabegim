<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'email' => 'required|email|unique:organizations,email',
        ];
    }

    public function messages()
    {
        return [
            'name.*' => 'The name field is required and must be a string with a maximum length of 255 characters.',
            'website.*' => 'The website field is required and must be a string with a maximum length of 255 characters.',
            'email.*' => 'The email field is required, must be a valid email address, and must be unique.',
        ];
    }
}
