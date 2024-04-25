<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectoController extends Controller
{

    public function index()
    {
        $proyectos = auth()->user()->proyectos; //optenemos los proyectos segun el usuario
        return view('memorias.proyectos.index',[
            'proyectos'=>$proyectos,
        ]);
    }

    public function create()
    {
        return view('memorias.proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>['required'],
            'resolucion'=>['nullable'],
            'carrera'=>['nullable'],
            'departamento'=>['nullable'],
            'instituto'=>['nullable'],
            'titulo'=>['required'],
            'descripcion'=>['nullable'],
            'tipo'=>['nullable'],
            'investigadores'=>['nullable'],
            'fecha_inicio'=>['required'],
            'fecha_finalizacion'=>['required'],
            'fuente'=>['nullable'],
            'palabra_clave'=>['nullable'],
            'colaboracion'=>['nullable'],
            'resultado'=>['nullable'],
            'impacto'=>['nullable'],
            'estado'=>['required'],
        ]);
        $proyecto = Proyecto::create([
            'user_id'=>$request->input('user_id'),
            'resolucion'=>$request->input('resolucion'),
            'carrera'=>$request->input('carrera'),
            'departamento'=>$request->input('departamento'),
            'instituto'=>$request->input('instituto'),
            'titulo'=>$request->input('titulo'),
            'descripcion'=>$request->input('descripcion'),
            'tipo'=>$request->input('tipo'),
            'investigadores'=>$request->input('investigdores'),
            'fecha_inicio'=>$request->input('fecha_inicio'),
            'fecha_finalizacion'=>$request->input('fecha_finalizacion'),
            'fuente'=>$request->input('fuente'),
            'palabra_clave'=>$request->input('palabra_clave'),
            'colaboracion'=>$request->input('colaboracion'),
            'resultado'=>$request->input('resultado'),
            'impacto'=>$request->input('impacto'),
            'estado'=>$request->input('estado'),
        ]);
        return to_route('proyectos.index');
    }

    public function show(string $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('memorias.proyectos.show',[
            'proyecto'=>$proyecto,
        ]);
    }

    public function edit(string $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('memorias.proyectos.edit',[
            'proyecto'=>$proyecto,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $request->validate([
            'user_id'=>['required'],
            'resolucion'=>['nullable'],
            'carrera'=>['nullable'],
            'departamento'=>['nullable'],
            'instituto'=>['nullable'],
            'titulo'=>['required'],
            'descripcion'=>['nullable'],
            'tipo'=>['nullable'],
            'investigadores'=>['nullable'],
            'fecha_inicio'=>['required'],
            'fecha_finalizacion'=>['required'],
            'fuente'=>['nullable'],
            'palabra_clave'=>['nullable'],
            'colaboracion'=>['nullable'],
            'resultado'=>['nullable'],
            'impacto'=>['nullable'],
            'estado'=>['required'],
        ]);
        $proyecto->update([
            'resolucion'=>$request->input('resolucion'),
            'carrera'=>$request->input('carrera'),
            'departamento'=>$request->input('departamento'),
            'instituto'=>$request->input('instituto'),
            'titulo'=>$request->input('titulo'),
            'descripcion'=>$request->input('descripcion'),
            'tipo'=>$request->input('tipo'),
            'investigadores'=>$request->input('investigdores'),
            'fecha_inicio'=>$request->input('fecha_inicio'),
            'fecha_finalizacion'=>$request->input('fecha_finalizacion'),
            'fuente'=>$request->input('fuente'),
            'palabra_clave'=>$request->input('palabra_clave'),
            'colaboracion'=>$request->input('colaboracion'),
            'resultado'=>$request->input('resultado'),
            'impacto'=>$request->input('impacto'),
            'estado'=>$request->input('estado'),
        ]);
        return to_route('proyectos.index');
    }

    public function destroy(string $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('exitoso', 'Registro eliminado correctamente.');
    }
}
