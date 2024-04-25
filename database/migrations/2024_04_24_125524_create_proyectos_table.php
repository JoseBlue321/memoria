<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('resolucion')->nullable();
            $table->string('carrera')->nullable();
            $table->string('departamento')->nullable();
            $table->string('instituto')->nullable();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('tipo')->nullable();
            $table->text('investigadores')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
            $table->string('fuente')->nullable();
            $table->string('palabra_clave')->nullable();
            $table->string('colaboracion')->nullable();
            $table->string('resultado')->nullable();
            $table->string('impacto')->nullable();
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
