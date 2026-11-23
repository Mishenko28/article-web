<?php

namespace App\Laravel\Requests\Backoffice;

use App\Laravel\Requests\RequestManager;

class LoginRequest extends RequestManager
{
    public function rules()
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'email.required' => 'The email address is required.',
            'email.email' => 'Please enter a valid email address.',

            'password.required' => 'The password is required.',
            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
    }
}
