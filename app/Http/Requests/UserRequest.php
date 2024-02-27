<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function msgs()
    {
        return [
            'name.*' => 'The name field is required and must be a string with a maximum length of 255 characters.',
            'email.*' => 'The email field is required, and a valid email address must be provided. Additionally, the email must be unique.',
            'password.*' => 'The password field is required and must be a string with a minimum length of 8 characters. The password confirmation must match.',
        ];
    }
}
