<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = [
        'carrera_id',
        'anio',
    ];
    
    public function carreras(): BelongsTo
    {
        return $this->belongsTo(Carrera::class,'carrera_id');
    }

    public function asignaturas(): HasMany
    {
        return $this->hasMany(Asignatura::class,'curso_id');
    }
}
