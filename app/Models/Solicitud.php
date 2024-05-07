<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    protected $fillable = [
        'nombre',
        'celular',
        'correo',
        'asignatura',
        'carrera',
        'departamento',
        'catedra',
        'anio',
        'tipo',
        'fecha_examen',
        'numero_preguntas',
    ];
}
