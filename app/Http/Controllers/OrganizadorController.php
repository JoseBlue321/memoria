<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizador;
class OrganizadorController extends Controller
{
    public function index()
    {
        $organizadores = auth()->user()->organizadores; //optenemos los libros registrados por el ususario
        return view('memorias.organizadores.index',[
            'organizadores'=>$organizadores,
        ]);
    }

    public function create()
    {
        return view('memorias.organizadores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'titulo'=>['required','string'],
            'organizadores'=>['nullable','string'],
            'hcf'=>['nullable','string'],
            'carrera'=>['nullable','string'],
            'lugar'=>['nullable','string'],
            'tipo'=>['nullable','string'],
            'fecha_inicio'=>['required','date'],
            'fecha_finalizacion'=>['required','date'],
            'resumen'=>['nullable','string'],
            'numero_participantes'=>['nullable'],
            'archivo_organizadores'=>'nullable|mimes:pdf|max:10240', // Máximo 10 MB
        ]);
        $file = $request->file('archivo_organizadores');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('organizadores/'.$request->input('user_id'),$fileName, 'public'); // Almacena en la carpeta /storage/app/public/articulos   
        }else {
            $filePath = '';
        }

        Organizador::create([
            'user_id'=>$request->input('user_id'),
            'titulo'=>$request->input('titulo'),
            'organizadores'=>$request->input('organizadores'),
            'hcf'=>$request->input('hcf'),
            'carrera'=>$request->input('carrera'),
            'lugar'=>$request->input('lugar'),
            'tipo'=>$request->input('tipo'),
            'fecha_inicio'=>$request->input('fecha_inicio'),
            'fecha_finalizacion'=>$request->input('fecha_finalizacion'),
            'resumen'=>$request->input('resumen'),
            'numero_participantes'=>$request->input('numero_participantes'),
            'archivo_organizadores'=>$filePath,
        ]);
        return to_route('organizadores.index');
    }

    public function show(string $id)
    {
        $organizador = Organizador::findOrFail($id);
        return view('memorias.organizadores.show',[
            'organizador'=>$organizador,
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
        $organizador = Organizador::findOrFail($id);
        $organizador->delete();
        return redirect()->route('organizadores.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
