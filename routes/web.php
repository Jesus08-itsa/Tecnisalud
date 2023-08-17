<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * Redirection Controller Routes
         */
        Route::get('/redireccion-alarma', 'RedireccionController@redireccionCrearAlarma')->name('redireccion-alarma');
        Route::get('/redireccion-consultar-horarios', 'RedireccionController@redireccionConsultarHorarios')->name('redireccion-consultar-horarios');
        Route::get('/redireccion-escribir-profesional', 'RedireccionController@redireccionEscribirProfesional')->name('redireccion-escribir-profesional');
        Route::get('/redireccion-registro-tomas', 'RedireccionController@redireccionRegistroTomas')->name('redireccion-registro-tomas');
        Route::get('/redireccion-descargar-recetas', 'RedireccionController@redireccionDescargarRecetas')->name('redireccion-descargar-recetas');

        /**
         * HomeAdmin Route
         */
        Route::get('/home-admin', 'HomeAdminController@index')->name('home.admin');

        /**
         * HomeUser Route
         */
        Route::get('/home-user', 'HomeUsuarioController@index')->name('home.user');

        /**
         * Profile Update Route
         */
        Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
        
        /**
         * Consulta Medicamentos Route
         */
        Route::get('/consulta-medicamentos', 'ConsultaMedicamentosController@consultaMedicamentos')->name('consulta.medicamentos');

    });
});
