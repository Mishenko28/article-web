<?php

namespace App\Laravel\Requests\Backoffice;

use App\Laravel\Requests\RequestManager;

class AdminUpdateRequest extends RequestManager
{
    public function rules()
    {
        $rules = [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $this->id,
            'password' => 'nullable|string|min:8',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'full_name.required' => 'The first name is required.',
            'full_name.string' => 'The first name must be a valid string.',
            'full_name.max' => 'The first name cannot be greater than 255 characters.',

            'email.required' => 'The email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',

            'password.string' => 'The password must be a valid string.',
            'password.min' => 'The password must be at least 8 characters.',

            'avatar.image' => 'Please attach a valid image.',
            'avatar.mimes' => 'The avatar must be a JPG, JPEG, PNG, GIF, or WEBP file.',
            'avatar.max' => 'The avatar must not be larger than 5 MB.',
        ];
    }
}
