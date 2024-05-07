<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $fillable = [
        'carrera'
    ];
    public function cursos(): HasMany
    {
        return $this->hasMany(Curso::class,'carrera_id');
    }
}
