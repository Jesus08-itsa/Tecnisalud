<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilTable extends Migration
{
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->id('id_perfil');
            $table->string('perfil', 40);
        });

        // Insertar valores iniciales en la tabla
        DB::table('perfil')->insert([
            ['perfil' => 'Medico'],
            ['perfil' => 'Paciente'],
            // Agrega más valores si es necesario
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}
