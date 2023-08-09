<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $welcomeMessage = "Bienvenido Doctor, " . $user->nombre;
        return response()->json(['message' => $welcomeMessage]);
    }

    // Otros métodos y acciones para el Home del administrador

    public function consultarReportes()
    {
        // Lógica para consultar y mostrar reportes
    }

    public function gestionarUsuarios()
    {
        // Lógica para gestionar usuarios (crear, editar, eliminar)
    }

    // Agrega más métodos según las acciones que el administrador pueda realizar en el Home
}
