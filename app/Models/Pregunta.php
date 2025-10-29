<?php
// app/Models/Pregunta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'enunciado',
        'opcion_a',
        'opcion_b',
        'opcion_c',
        'opcion_d',
        'respuesta_correcta',
        'explicacion',
        'materia_id',
        'grupo_pregunta_id'
    ];

    protected $casts = [
        'respuesta_correcta' => 'string',
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function grupoPregunta()
    {
        return $this->belongsTo(GrupoPregunta::class);
    }

    public function examenes()
    {
        return $this->belongsToMany(Examen::class, 'examen_pregunta')
                    ->withTimestamps();
    }

    // Método para verificar si la respuesta es correcta
    public function esCorrecta($respuestaUsuario)
    {
        return $this->respuesta_correcta === $respuestaUsuario;
    }
}