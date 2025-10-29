<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_preguntas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->text('enunciado');
            $table->string('opcion_a');
            $table->string('opcion_b');
            $table->string('opcion_c');
            $table->string('opcion_d');
            $table->enum('respuesta_correcta', ['a', 'b', 'c', 'd']);
            $table->text('explicacion')->nullable();
            $table->foreignId('materia_id')->constrained()->onDelete('cascade');
            $table->foreignId('grupo_pregunta_id')->nullable()->constrained('grupo_preguntas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}