<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'dni' => 'required|min:7|max:8|unique:people',
            'name' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'phone' => 'max:11',
            'direction' => 'max:100',
            'username' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',

        ];
    }

    public function messages()
    {
        return [
            'dni.required' => 'Error. Este campo es obligatorio',
            'dni.min' => 'Error. Ingrese una cedula valida',
            'dni.max' => 'Error. Ingrese una cedula valida',
            'dni.unique' => 'Error. Esta cedula ya existe!',

            'name.required' => 'Error. Este campo es obligatorio',
            'name.max' => 'Error. Limite de 50 caracteres',

            'lastname.required' => 'Error. Este campo es obligatorio',
            'lastname.max' => 'Error. Limite de 50 caracteres',

            'phone.max' => 'Error. Telefono Invalido',

            'direction.max' => 'Error. Limite de 100 caracteres',

            'username.required' => 'Error. Este campo es obligatorio',
            'username.max' => 'Error. Limite de 20 caracteres',
            'username.unique' => 'Error. Nombre de usuario ya existe!',

            'email.required' => 'Error. Este campo es obligatorio',
            'email.email' => 'Error. Formato de correo incorrecto',
            'email.max' => 'Error. Limite de 100 caracteres',
            'email.unique' => 'Error. Este correo ya existe',

            'password.required' => 'Error. Este campo es obligatorio',
            'password.min' => 'Error. Longitud de clave muy corta',
        ];
    }
}
