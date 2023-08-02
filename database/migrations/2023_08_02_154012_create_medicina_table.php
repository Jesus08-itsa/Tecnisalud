<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinaTable extends Migration
{
    public function up()
    {
        Schema::create('medicina', function (Blueprint $table) {
            $table->id('id_medicamento');
            $table->string('nombre', 20);
            $table->string('descripcion', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicina');
    }
}
