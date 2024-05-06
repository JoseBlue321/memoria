<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    use HasFactory;
    protected $table = 'organizadores';
    protected $fillable = [
        'user_id',
        'titulo',
        'organizadores',
        'hcf',
        'carrera',
        'lugar',
        'tipo',
        'fecha_inicio',
        'fecha_finalizacion',
        'resumen',
        'numero_participantes',
        'archivo_organizadores',
    ];
}
