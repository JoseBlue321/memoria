<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function proyectos(): HasMany
    {
        return $this->hasMany(Proyecto::class);
    }
    public function articulos(): HasMany
    {
        return $this->hasMany(Articulo::class);
    }
    public function libros(): HasMany
    {
        return $this->hasMany(Libro::class);
    }
    public function tesis(): HasMany
    {
        return $this->hasMany(Tesis::class);
    }
    public function aportes(): HasMany
    {
        return $this->hasMany(Aporte::class);
    }
    public function organizadores(): HasMany
    {
        return $this->hasMany(Organizador::class);
    }
    public function patentes(): HasMany
    {
        return $this->hasMany(Patente::class);
    }
    public function otros(): HasMany
    {
        return $this->hasMany(Otro::class);
    }
    

}
