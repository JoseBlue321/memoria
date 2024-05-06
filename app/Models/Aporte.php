<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    use HasFactory;
    protected $table = 'aportes';
    protected $fillable = [
        'user_id',
        'titulo',
        'nombre',
        'autores',
        'lugar',
        'tipo_evento',
        'tipo_participacion',
        'fecha_inicio',
        'fecha_finalizacion',
        'resumen',
        'enlace',
        'archivo_aportes',
    ];
}
