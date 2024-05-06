<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aporte;

class AporteController extends Controller
{

    public function index()
    {
        $aportes = auth()->user()->aportes; //optenemos los libros registrados por el ususario
        return view('memorias.aportes.index',[
            'aportes'=>$aportes,
        ]);
    }

    public function create()
    {
        return view('memorias.aportes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'titulo'=>['required','string'],
            'nombre'=>['required','string'],
            'autores'=>['nullable','string'],
            'lugar'=>['required','string'],
            'tipo_evento'=>['required','string'],
            'tipo_participacion'=>['required','string'],
            'fecha_inicio'=>['required','date'],
            'fecha_finalizacion'=>['required','date'],
            'resumen'=>['nullable','string'],
            'enlace'=>['nullable','string'],
            'archivo_aportes'=>'nullable|mimes:pdf|max:10240', // Máximo 10 MB
        ]);
        $file = $request->file('archivo_aportes');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('aportes/'.$request->input('user_id'),$fileName, 'public'); // Almacena en la carpeta /storage/app/public/articulos   
        }else {
            $filePath = '';
        }

        Aporte::create([
            'user_id'=>$request->input('user_id'),
            'titulo'=>$request->input('titulo'),
            'nombre'=>$request->input('nombre'),
            'autores'=>$request->input('autores'),
            'lugar'=>$request->input('lugar'),
            'tipo_evento'=>$request->input('tipo_evento'),
            'tipo_participacion'=>$request->input('tipo_participacion'),
            'fecha_inicio'=>$request->input('fecha_inicio'),
            'fecha_finalizacion'=>$request->input('fecha_finalizacion'),
            'resumen'=>$request->input('resumen'),
            'enlace'=>$request->input('enlace'),
            'archivo_aportes'=>$filePath,
        ]);
        return to_route('aportes.index');
    }

    public function show(string $id)
    {
        $aporte = Aporte::findOrFail($id);
        return view('memorias.aportes.show',[
            'aporte'=>$aporte,
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
        $aporte = Aporte::findOrFail($id);
        $aporte->delete();
        return redirect()->route('aportes.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
