<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleTable extends Migration
{
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_atributo');
            $table->string('informacion', 50);

            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->foreign('id_atributo')->references('id_atributo')->on('atributos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle');
    }
}

