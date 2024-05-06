<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('titulo');
            $table->string('editorial');
            $table->text('autores')->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->string('enlace_libro')->nullable();
            $table->string('isbn')->nullable();
            $table->string('deposito_legal')->nullable();
            $table->string('archivo_libro')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
