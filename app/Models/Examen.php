<?php
// app/Models/Resultado.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'examen_id',
        'puntaje_total',
        'preguntas_correctas',
        'preguntas_incorrectas',
        'preguntas_no_contestadas',
        'respuestas_usuario',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $casts = [
        'respuestas_usuario' => 'array',
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

    // Calcular porcentaje de acierto
    public function porcentajeAcierto()
    {
        $total = $this->preguntas_correctas + $this->preguntas_incorrectas + $this->preguntas_no_contestadas;
        return $total > 0 ? round(($this->preguntas_correctas / $total) * 100, 2) : 0;
    }
}