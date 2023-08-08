<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:50',
            'correo' => 'required|min:3|max:50',
            'usuario' => 'required|min:3',
            'password' => 'required|min:3',
            'password_confirmation' => 'required|same:password',
            'cedula' => 'required|min:3',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|min:7',
            'direccion' => 'required|min:5|max:40',
        ];
    }
}


