<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUsuarioController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $welcomeMessage = "Bienvenido Paciente, " . $user->nombre;
        return response()->json(['message' => $welcomeMessage]);
    }
}
