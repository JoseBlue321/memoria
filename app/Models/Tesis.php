<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    use HasFactory;
    protected $table = 'tesis';
    protected $fillable = [
        'user_id',
        'titulo',
        'autores',
        'tutor',
        'resumen',
        'palabras_clave',
        'titulo_optar',
        'fecha_defensa',
        'archivo_tesis',
    ];
}
