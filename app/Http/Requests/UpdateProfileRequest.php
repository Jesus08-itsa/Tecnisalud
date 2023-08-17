<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // El usuario ya está autenticado, por lo que tiene permiso para actualizar su perfil.
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
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255|unique:usuarios,correo,' . auth()->user()->id,
            'usuario' => 'required|string|max:255|unique:usuarios,usuario,' . auth()->user()->id,
            'cedula' => 'required|string|max:255|unique:usuarios,cedula,' . auth()->user()->id,
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'perfil' => 'required|in:1,2',
            // Agrega aquí las reglas de validación para otros campos que quieras permitir que se actualicen.
        ];
    }
}
