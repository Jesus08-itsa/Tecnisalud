<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\Medicina;
use App\Models\Receta;
use App\Models\Formulacion;
use App\Models\HorarioMedicamento;
use App\Http\Controllers\Controller;
class ConsultaMedicamentosController extends Controller
{
    public function consultaMedicamentos()
    {
        $consulta = Usuario::select(
            'usuario.nombre as nombre_paciente',
            'usuario.fecha_nacimiento',
            'usuario.direccion as ciudad',
            'medicina.nombre as nombre_medicamento',
            'receta.dosificacion',
            'receta.duracion_tratamiento'
        )
        ->join('consulta', 'usuario.id_usuario', '=', 'consulta.id_usuario')
        ->join('formulacion', 'consulta.id_consulta', '=', 'formulacion.id_consulta')
        ->join('receta', 'formulacion.id_receta', '=', 'receta.id_receta')
        ->join('medicina', 'receta.id_medicamento', '=', 'medicina.id_medicamento')
        ->get();

        return response()->json($consulta);
    }
}
