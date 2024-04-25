<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    protected $fillable = [
        'user_id',
        'resolucion',
        'carrera',
        'departamento',
        'instituto',
        'titulo',
        'descripcion',
        'tipo',
        'investigadores',
        'fecha_inicio',
        'fecha_finalizacion',
        'fuente',
        'palabra_clave',
        'colaboracion',
        'resultado',
        'impacto',
        'estado',
    ];
}
