<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtributosTable extends Migration
{
    public function up()
    {
        Schema::create('atributos', function (Blueprint $table) {
            $table->id('id_atributo');
            $table->string('atributo', 40);
        });
    }

    public function down()
    {
        Schema::dropIfExists('atributos');
    }
}
