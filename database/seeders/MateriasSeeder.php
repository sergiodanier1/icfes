<?php
// database/seeders/MateriasSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriasSeeder extends Seeder
{
    public function run()
    {
        $materias = [
            ['nombre' => 'Matemáticas', 'descripcion' => 'Preguntas de matemáticas para pruebas ICFES'],
            ['nombre' => 'Lenguaje', 'descripcion' => 'Preguntas de lenguaje y comunicación'],
            ['nombre' => 'Ciencias Naturales', 'descripcion' => 'Preguntas de biología, química y física'],
            ['nombre' => 'Ciencias Sociales', 'descripcion' => 'Preguntas de historia, geografía y economía'],
            ['nombre' => 'Inglés', 'descripcion' => 'Preguntas de inglés para pruebas ICFES'],
        ];

        foreach ($materias as $materia) {
            Materia::create($materia);
        }
    }
}
