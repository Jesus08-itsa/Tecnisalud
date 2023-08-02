<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->id('id_consulta');
            $table->unsignedBigInteger('id_receta');
            $table->unsignedBigInteger('id_usuario');
            $table->date('fecha');

            $table->foreign('id_receta')->references('id_receta')->on('receta');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
