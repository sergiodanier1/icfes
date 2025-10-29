<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_resultados_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('examen_id')->constrained()->onDelete('cascade');
            $table->integer('puntaje_total');
            $table->integer('preguntas_correctas');
            $table->integer('preguntas_incorrectas');
            $table->integer('preguntas_no_contestadas');
            $table->json('respuestas_usuario'); // Almacena las respuestas del usuario
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_fin')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}