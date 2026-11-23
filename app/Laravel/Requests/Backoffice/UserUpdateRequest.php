<?php

namespace App\Laravel\Requests\Backoffice;

use App\Laravel\Requests\RequestManager;

class UserUpdateRequest extends RequestManager
{
    public function rules()
    {
        $rules = [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->id,
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
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

            'avatar.image' => 'Please attach a valid image.',
            'avatar.mimes' => 'The avatar must be a JPG, JPEG, PNG, GIF, or WEBP file.',
            'avatar.max' => 'The avatar must not be larger than 5 MB.',
        ];
    }
}
