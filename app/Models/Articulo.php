<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = 'articulos';
    protected $fillable = [
        'user_id',
        'autores',
        'carrera',
        'titulo',
        'nombre',
        'doi',
        'enlace',
        'citas',
        'vancouver',
        'archivo_articulo',
    ];
    
}
