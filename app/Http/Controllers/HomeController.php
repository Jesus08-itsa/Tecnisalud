<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application welcome message.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '¡Bienvenido a mi aplicación!';
    }
}
