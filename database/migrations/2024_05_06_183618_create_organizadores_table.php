<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organizadores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('titulo');
            $table->text('organizadores')->nullable();
            $table->integer('hcf')->nullable();
            $table->string('carrera')->nullable();
            $table->string('lugar')->nullable();
            $table->string('tipo')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
            $table->text('resumen')->nullable();
            $table->integer('numero_participantes')->nullable();
            $table->string('archivo_organizadores')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organizadores');
    }
};