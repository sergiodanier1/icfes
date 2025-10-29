<?php
// app/Models/Materia.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function grupoPreguntas()
    {
        return $this->hasMany(GrupoPregunta::class);
    }

    public function examenes()
    {
        return $this->hasMany(Examen::class);
    }
}