<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulacionTable extends Migration
{
    public function up()
    {
        Schema::create('formulacion', function (Blueprint $table) {
            $table->id('id_formulacion');
            $table->unsignedBigInteger('id_consulta');
            $table->unsignedBigInteger('id_receta');

            $table->foreign('id_consulta')->references('id_consulta')->on('consulta');
            $table->foreign('id_receta')->references('id_receta')->on('receta');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulacion');
    }
}

