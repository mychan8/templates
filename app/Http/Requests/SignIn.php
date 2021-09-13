<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignIn extends FormRequest
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
            'username' => 'required|string|max:30',
            'password' => 'required|string|max:30',
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'del nombre de usuario',
            'password' => 'de la contraseña',
        ];
    }
}
