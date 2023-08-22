<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->timestamps();
        });

        Schema::create('cursos_alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cursos_id');
            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->unsignedBigInteger('alumnos_id');
            $table->foreign('alumnos_id')->references('id')->on('alumnos');
            $table->char('asistencia', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('cursos_alumnos');
    }
};
