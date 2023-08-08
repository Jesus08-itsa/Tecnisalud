<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $userData = [
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'usuario' => $request->input('usuario'),
            'password' => bcrypt($request->input('password')),
            'id_perfil' => $request->input('perfil'),
        ];

        // Iniciar una transacción
        DB::beginTransaction();

        try {
            $user = Usuario::create($userData);

            // Confirmar la transacción
            DB::commit();

            Auth::login($user);

            return redirect()->route('home.index')->with('success', 'Registro exitoso. ¡Bienvenido a la aplicación!');
        } catch (\Exception $e) {
            // Revertir la transacción en caso de error
            DB::rollback();
            // Manejar el error de manera adecuada
            // ...

            // Comentar esta línea para revisar la información en caso de error
            // return redirect()->back()->withInput()->withErrors(['error' => 'Error en el registro']);
            return $e->getMessage(); // Devolver el mensaje de error para revisión
        }
    }
}
