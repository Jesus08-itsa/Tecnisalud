<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioMedicamentosTable extends Migration
{
    public function up()
    {
        Schema::create('horario_medicamentos', function (Blueprint $table) {
            $table->id('id_horario');
            $table->unsignedBigInteger('id_formulacion');
            $table->unsignedBigInteger('id_medicamento');
            $table->string('dia_semana', 20);
            $table->time('hora_inicial');
            $table->time('hora_final');
            $table->integer('cantidad');

            $table->foreign('id_formulacion')->references('id_formulacion')->on('formulacion');
            $table->foreign('id_medicamento')->references('id_medicamento')->on('medicina');
        });
    }

    public function down()
    {
        Schema::dropIfExists('horario_medicamentos');
    }
}
