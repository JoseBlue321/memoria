<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otro extends Model
{
    use HasFactory;
    protected $table = 'otros';
    protected $fillable = [
        'user_id',
        'titulo',
        'tipo',
        'enlace',
        'archivo_otro',
    ];
}
