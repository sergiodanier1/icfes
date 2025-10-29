<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_role_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['estudiante', 'docente', 'administrador'])->default('estudiante');
            $table->string('phone')->nullable();
            $table->date('birth_date')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'phone', 'birth_date']);
        });
    }
}