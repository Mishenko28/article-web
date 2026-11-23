<?php

namespace App\Laravel\Requests\Portal;

use App\Laravel\Requests\RequestManager;

class RegisterRequest extends RequestManager
{
    public function rules()
    {
        $rules = [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'first_name.required' => 'The first name is required.',
            'first_name.string' => 'The first name must be a valid string.',
            'first_name.max' => 'The first name cannot be greater than 255 characters.',

            'middle_name.string' => 'The middle name must be a valid string.',
            'middle_name.max' => 'The middle name cannot be greater than 255 characters.',

            'last_name.required' => 'The last name is required.',
            'last_name.string' => 'The last name must be a valid string.',
            'last_name.max' => 'The last name cannot be greater than 255 characters.',

            'email.required' => 'The email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',

            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
    }
}
