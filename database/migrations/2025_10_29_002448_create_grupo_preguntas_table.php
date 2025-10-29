<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_grupo_preguntas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoPreguntasTable extends Migration
{
    public function up()
    {
        Schema::create('grupo_preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->foreignId('materia_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grupo_preguntas');
    }
}