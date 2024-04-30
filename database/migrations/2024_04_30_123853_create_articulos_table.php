<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('autores')->nullable();
            $table->string('titulo');
            $table->string('nombre');
            $table->string('doi')->nullable();
            $table->string('enlace')->nullable();
            $table->integer('citas')->nullable();
            $table->string('vancouver')->nullable();
            $table->string('archivo_articulo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
