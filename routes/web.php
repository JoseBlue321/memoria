<?php

use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    #*********************Proyectos*****************************
    Route::get('proyectos/index',[ProyectoController::class,'index'])->name('proyectos.index');
    Route::get('proyectos/create',[ProyectoController::class,'create'])->name('proyectos.create');
    Route::post('proyectos/store',[ProyectoController::class,'store'])->name('proyectos.store');
    Route::get('proyectos/show/{id}',[ProyectoController::class,'show'])->name('proyectos.show');
    Route::get('proyectos/edit/{id}',[ProyectoController::class,'edit'])->name('proyectos.edit');
    Route::put('proyectos/update/{id}',[ProyectoController::class,'update'])->name('proyectos.update');
    Route::delete('proyectos/delete/{id}',[ProyectoController::class,'destroy'])->name('proyectos.destroy');



    Route::get('memorias/articulos',[MemoriaController::class,'articulos'])->name('articulos.memorias');
    Route::get('memorias/libros',[MemoriaController::class,'libros'])->name('libros.memorias');
    Route::get('memorias/tesis',[MemoriaController::class,'tesis'])->name('tesis.memorias');
    Route::get('memorias/aportes',[MemoriaController::class,'aportes'])->name('aportes.memorias');
    Route::get('memorias/organizadores',[MemoriaController::class,'organizadores'])->name('organizadores.memorias');
    Route::get('memorias/patentes',[MemoriaController::class,'patentes'])->name('patentes.memorias');
});

require __DIR__.'/auth.php';
