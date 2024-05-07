<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asignatura extends Model
{
    use HasFactory;
    protected $table = 'asignaturas';
    protected $fillable = [
        'curso_id',
        'nombre',
        'parcial',
        'fecha',
        'patron',
        'detalle',
    ];
    public $timestamps = false;

    public function cursos(): BelongsTo
    {
        return $this->belongsTo(Curso::class,'curso_id');
    }

    public function estudiantes(): HasMany
    {
        return $this->hasMany(Estudiante::class,'asignatura_id');
    }
}
