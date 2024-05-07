<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class CalificacionesController extends Controller
{
    //verifica la validez del carnet y nos direcciona a la vista para ver su nota
    public function show(Request $request)
    {
        $request->validate([
            'carnet' => ['exists:App\Models\Estudiante,carnet'],
        ]);
        $carnet = $request->input('carnet');
        $estudiantes = Estudiante::where('carnet','=',$carnet)->get();
        return view('calificaciones.asignatura',
        [
            'estudiantes'=>$estudiantes,
        ]);
    }
}
