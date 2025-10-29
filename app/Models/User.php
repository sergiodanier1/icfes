<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'birth_date',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
    ];

    // Relaciones
    public function examenesCreados()
    {
        return $this->hasMany(Examen::class, 'user_id');
    }

    public function resultados()
    {
        return $this->hasMany(Resultado::class);
    }

    // Métodos de verificación de roles
    public function isAdministrador()
    {
        return $this->role === 'administrador';
    }

    public function isDocente()
    {
        return $this->role === 'docente';
    }

    public function isEstudiante()
    {
        return $this->role === 'estudiante';
    }

    public function isDocenteOrAdmin()
    {
        return $this->isDocente() || $this->isAdministrador();
    }
}