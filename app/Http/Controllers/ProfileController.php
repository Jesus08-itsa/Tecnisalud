<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();

        $user->nombre = $request->input('nombre');
        $user->correo = $request->input('correo');
        $user->usuario = $request->input('usuario');
        $user->cedula = $request->input('cedula');
        $user->fecha_nacimiento = $request->input('fecha_nacimiento');
        $user->telefono = $request->input('telefono');
        $user->direccion = $request->input('direccion');
        $user->id_perfil = $request->input('perfil');

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Perfil actualizado correctamente');
    }
}
