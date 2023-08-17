<?php
// app/Models/HorarioMedicamento.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorarioMedicamento extends Model
{
    protected $table = 'horario_medicamentos';
    protected $primaryKey = 'id_horario';

    public function formulacion()
    {
        return $this->belongsTo(Formulacion::class, 'id_formulacion', 'id_formulacion');
    }

    public function medicamento()
    {
        return $this->belongsTo(Medicina::class, 'id_medicamento', 'id_medicamento');
    }
}
