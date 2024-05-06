<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $fillable = [
        'user_id',
        'titulo',
        'editorial',
        'autores',
        'fecha_publicacion',
        'enlace_libro',
        'isbn',
        'deposito_legal',
        'archivo_libro',
    ];
}
