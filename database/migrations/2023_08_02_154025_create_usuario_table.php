<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('cedula', 10);
            $table->string('nombre', 50);
            $table->date('fecha_nacimiento');
            $table->string('correo', 50);
            $table->string('telefono', 10);
            $table->string('direccion', 50);
            $table->string('usuario', 50);
            $table->string('password', 250);
            $table->unsignedBigInteger('id_perfil');
            $table->timestamps(); // Agregar las columnas de marca de tiempo

            $table->foreign('id_perfil')->references('id_perfil')->on('perfil');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
