<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    use HasFactory;
    protected $table = 'patentes';
    protected $fillable = [
        'user_id',
        'titulo',
        'numero',
        'nombres',
        'fecha_solicitud',
        'fecha_concesion',
        'titular',
        'resumen',
        'reinvindicaciones',
        'clasificacion',
        'lugar',
    ];
}
