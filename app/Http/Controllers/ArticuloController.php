<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = auth()->user()->articulos; //optenemos los articulos registrados por el ususario
        return view('memorias.articulos.index',[
            'articulos'=>$articulos,
        ]);
    }

    public function create()
    {
        return view('memorias.articulos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'autores'=>['nullable','string'],
            'titulo'=>['required','string'],
            'nombre'=>['required','string'],
            'doi'=>['nullable','string'],
            'enlace'=>['nullable','string'],
            'citas'=>['nullable'],
            'vancouver'=>'nullable',
            'articulo_pdf'=>'nullable|mimes:pdf|max:10240', // Máximo 10 MB
        ]);
        $file = $request->file('articulo_pdf');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('articulos/'.$request->input('user_id'),$fileName, 'public'); // Almacena en la carpeta /storage/app/public/articulos   
        }else {
            $filePath = '';
        }

        Articulo::create([
            'user_id'=>$request->input('user_id'),
            'autores'=>$request->input('autores'),
            'titulo'=>$request->input('titulo'),
            'nombre'=>$request->input('nombre'),
            'doi'=>$request->input('doi'),
            'enlace'=>$request->input('enlace'),
            'citas'=>$request->input('citas'),
            'vancouver'=>$request->input('vancouver'),
            'archivo_articulo'=>$filePath,
        ]);
        return to_route('articulo.index');
    }

    public function show(string $id)
    {
        $articulo = Articulo::findOrFail($id);
        $pdf = $articulo->archivo_articulo;
        $filePath = storage_path('app/public/' . $pdf);
        return view('memorias.articulos.show',[
            'articulo'=>$articulo,
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
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect()->route('articulo.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
