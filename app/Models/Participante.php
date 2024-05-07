<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $table = 'participantes';
    protected $fillable = [
        'evento_id',
        'certificado',
        'carnet',
        'tipo',
        'grado',
        'nombre',
        'paterno',
        'materno',
        'correo',
        'telefono',
    ];
    /**
     * Get the user that owns the Participante
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventos(): BelongsTo
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}
