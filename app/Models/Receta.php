<?php
// app/Models/Receta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'receta';
    protected $primaryKey = 'id_receta';

    public function medicamento()
    {
        return $this->belongsTo(Medicina::class, 'id_medicamento', 'id_medicamento');
    }
}
