<?php

namespace App\Laravel\Requests\Api;

use App\Laravel\Requests\ApiRequestManager;

class CMSRequest extends ApiRequestManager
{
    public function rules()
    {
        $rules = [
            'section' => "required",
            'content' => "required",
            'page' => "required",
        ];


        return $rules;
    }

    public function messages()
    {
        return [
            'required'    => "Field is required.",
        ];
    }
}
