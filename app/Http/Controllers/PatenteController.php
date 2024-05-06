<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patente;

class PatenteController extends Controller
{
    public function index()
    {
        $patentes = auth()->user()->patentes; //optenemos los libros registrados por el ususario
        return view('memorias.patentes.index',[
            'patentes'=>$patentes,
        ]);
    }

    public function create()
    {
        return view('memorias.patentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>['required'],
            'titulo'=>['required','string'],
            'numero'=>['nullable'],
            'nombres'=>['nullable','string'],
            'fecha_solicitud'=>['nullable','date'],
            'fecha_concesion'=>['nullable','date'],
            'titular'=>['nullable','string'],
            'resumen'=>['nullable','string'],
            'reinvindicaciones'=>['nullable','string'],
            'clasificacion'=>['nullable','string'],
            'lugar'=>['nullable','string'],
        ]);
        Patente::create([
            'user_id'=>$request->input('user_id'),
            'titulo'=>$request->input('titulo'),
            'numero'=>$request->input('numero'),
            'nombres'=>$request->input('nombres'),
            'fecha_solicitud'=>$request->input('fecha_solicitud'),
            'fecha_concesion'=>$request->input('fecha_concesion'),
            'titular'=>$request->input('titular'),
            'resumen'=>$request->input('resumen'),
            'reinvindicaciones'=>$request->input('reinvindicaciones'),
            'clasificacion'=>$request->input('clasificacion'),
            'lugar'=>$request->input('lugar'),
        ]);
        return to_route('patentes.index');
    }

    public function show(string $id)
    {
        $patente = Patente::findOrFail($id);
        return view('memorias.patentes.show',[
            'patente'=>$patente,
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $patente = Patente::findOrFail($id);
        $patente->delete();
        return redirect()->route('patentes.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
