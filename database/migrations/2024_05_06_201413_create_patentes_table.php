<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('titulo');
            $table->integer('numero');
            $table->string('nombres')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->date('fecha_concesion')->nullable();
            $table->string('titular')->nullable();
            $table->text('resumen')->nullable();
            $table->string('reinvindicaciones')->nullable();
            $table->string('clasificacion')->nullable();
            $table->string('lugar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patentes');
    }
};
