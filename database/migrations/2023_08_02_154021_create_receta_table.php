<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaTable extends Migration
{
    public function up()
    {
        Schema::create('receta', function (Blueprint $table) {
            $table->id('id_receta');
            $table->unsignedBigInteger('id_medicamento');
            $table->decimal('dosificacion', 20, 0);
            $table->string('duracion_tratamiento', 50);

            $table->foreign('id_medicamento')->references('id_medicamento')->on('medicina');
        });
    }

    public function down()
    {
        Schema::dropIfExists('receta');
    }
}

