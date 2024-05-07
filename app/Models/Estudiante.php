<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $fillable = [
        'asignatura_id',
        'carnet',
        'nombre',
        'paterno',
        'materno',
        'nota',
        'imagen',
    ];
    public function asignaturas(): BelongsTo
    {
        return $this->belongsTo(Asignatura::class,'asignatura_id');
    }
}
