<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tesis;

class TesisController extends Controller
{

    public function index()
    {
        $tesis = auth()->user()->tesis; //optenemos los libros registrados por el ususario
        return view('memorias.tesis.index',[
            'tesis'=>$tesis,
        ]);
    }

    public function create()
    {
        return view('memorias.tesis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'titulo'=>['required','string'],
            'autores'=>['nullable','string'],
            'tutor'=>['nullable','string'],
            'resumen'=>['nullable','string'],
            'palabras_clave'=>['nullable','string'],
            'titulo_optar'=>['nullable','string'],
            'fecha_defensa'=>['nullable','date'],
            'archivo_tesis'=>'nullable|mimes:pdf|max:10240', // Máximo 10 MB
        ]);
        $file = $request->file('archivo_tesis');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('tesis/'.$request->input('user_id'),$fileName, 'public'); // Almacena en la carpeta /storage/app/public/articulos   
        }else {
            $filePath = '';
        }

        Tesis::create([
            'user_id'=>$request->input('user_id'),
            'titulo'=>$request->input('titulo'),
            'autores'=>$request->input('autores'),
            'tutor'=>$request->input('tutor'),
            'resumen'=>$request->input('resumen'),
            'palabras_clave'=>$request->input('palabras_clave'),
            'titulo_optar'=>$request->input('titulo_optar'),
            'fecha_defensa'=>$request->input('fecha_defensa'),
            'archivo_tesis'=>$filePath,
        ]);
        return to_route('tesis.index');
    }

    public function show(string $id)
    {
        $tesis = Tesis::findOrFail($id);
        return view('memorias.tesis.show',[
            'tesis'=>$tesis,
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
        $tesis = Tesis::findOrFail($id);
        $tesis->delete();
        return redirect()->route('tesis.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
