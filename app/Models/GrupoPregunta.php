<?php
// app/Models/GrupoPregunta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoPregunta extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'materia_id'];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function preguntas()
    {
        return $this->hasMany(Pregunta::class);
    }
}