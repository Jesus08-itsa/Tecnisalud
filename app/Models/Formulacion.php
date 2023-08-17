<?php
// app/Models/Formulacion.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulacion extends Model
{
    protected $table = 'formulacion';
    protected $primaryKey = 'id_formulacion';

    public function consulta()
    {
        return $this->belongsTo(Consulta::class, 'id_consulta', 'id_consulta');
    }

    public function receta()
    {
        return $this->belongsTo(Receta::class, 'id_receta', 'id_receta');
    }
}
