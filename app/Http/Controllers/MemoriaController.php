<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class MemoriaController extends Controller
{
    public function proyectos(){
        return view('memorias.proyectos');
    }
    public function articulos(){
        return view('memorias.articulos');
    }
    public function libros(){
        return view('memorias.libros');
    }
    public function tesis(){
        return view('memorias.tesis');
    }
    public function aportes(){
        return view('memorias.aportes');
    }
    public function organizadores(){
        return view('memorias.organizadores');
    }
    public function patentes(){
        return view('memorias.patentes');
    }
}
