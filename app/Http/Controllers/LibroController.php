<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        $libros = auth()->user()->libros; //optenemos los libros registrados por el ususario
        return view('memorias.libros.index',[
            'libros'=>$libros,
        ]);
    }

    public function create()
    {
        return view('memorias.libros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'titulo'=>['required','string'],
            'editorial'=>['required','string'],
            'autores'=>['nullable','string'],
            'fecha_publicacion'=>['nullable','date'],
            'enlace_libro'=>['nullable'],
            'isbn'=>'nullable',
            'deposito_legal'=>'nullable',
            'archivo_libro'=>'nullable|mimes:pdf|max:10240', // Máximo 10 MB
        ]);
        $file = $request->file('archivo_libro');
        if ($file != null) {
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('libros/'.$request->input('user_id'),$fileName, 'public'); // Almacena en la carpeta /storage/app/public/articulos   
        }else {
            $filePath = '';
        }

        Libro::create([
            'user_id'=>$request->input('user_id'),
            'titulo'=>$request->input('titulo'),
            'editorial'=>$request->input('editorial'),
            'autores'=>$request->input('autores'),
            'fecha_publicacion'=>$request->input('fecha_publicacion'),
            'enlace_libro'=>$request->input('enlace_libro'),
            'isbn'=>$request->input('isbn'),
            'deposito_legal'=>$request->input('deposito_legal'),
            'archivo_libro'=>$filePath,
        ]);
        return to_route('libros.index');
    }

    public function show(string $id)
    {
        $libro = Libro::findOrFail($id);
        return view('memorias.libros.show',[
            'libro'=>$libro,
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
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
