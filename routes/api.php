<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------

*/

// Rutas para el registro y login
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
