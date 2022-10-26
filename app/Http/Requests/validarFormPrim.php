<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarFormPrim extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtMatri'=>'required|max:9',
            'txtPass'=>'required|max:15'
        ];
    }
}
