<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Los campos que se pueden llenar.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'role'];

    /**
     * Los campos ocultos.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Los campos y sus tipos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Verificar si el usuario es administrador
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Verificar si el usuario es aspirante
    public function isAspirante()
    {
        return $this->role === 'aspirante';
    }

    // Verificar si el usuario es aprendiz
    public function isAprendiz()
    {
        return $this->role === 'aprendiz';
    }
}
