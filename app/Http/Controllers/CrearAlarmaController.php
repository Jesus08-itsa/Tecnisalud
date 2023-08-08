<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearAlarmaController extends Controller
{
    public function show()
    {
        // Aquí puedes agregar la lógica que necesites para mostrar la página de Crear Alarma
        return view('crear-alarma'); // Asegúrate de crear la vista correspondiente
    }
}
