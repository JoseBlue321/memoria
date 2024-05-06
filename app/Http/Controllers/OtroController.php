<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otro;

class OtroController extends Controller
{

    public function index()
    {
        $otros = auth()->user()->otros; 
        return view('memorias.otros.index',[
            'otros'=>$otros,
        ]);
    }

    public function create()
    {
        return view('memorias.otros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>['required'],
            'titulo'=>['required','string'],
            'tipo'=>['required','string'],
            'enlace'=>['nullable','string'],
            'archivo_otro'=>'nullable|mimes:pdf|max:10240',
        ]);
        $file = $request->file('archivo_otro');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('Otros/'.$request->input('user_id'),$fileName, 'public'); // Almacena en la carpeta /storage/app/public/articulos   
        }else {
            $filePath = '';
        }
        Otro::create([
            'user_id'=>$request->input('user_id'),
            'titulo'=>$request->input('titulo'),
            'tipo'=>$request->input('tipo'),
            'enlace'=>$request->input('enlace'),
            'archivo_otro'=>$filePath,
        ]);
        return to_route('otros.index');
    }

    public function show(string $id)
    {
        $otro = Otro::findOrFail($id);
        return view('memorias.otros.show',[
            'otro'=>$otro,
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
        $otro = Otro::findOrFail($id);
        $otro->delete();
        return redirect()->route('otros.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
