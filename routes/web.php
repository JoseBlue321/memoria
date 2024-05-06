<?php

use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\TesisController;
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

    #*********************Articulos*****************************
    Route::get('articulos/index',[ArticuloController::class,'index'])->name('articulo.index');
    Route::get('articulos/create',[ArticuloController::class,'create'])->name('articulo.create');
    Route::post('articulos/store',[ArticuloController::class,'store'])->name('articulo.store');
    Route::get('articulos/show/{id}',[ArticuloController::class,'show'])->name('articulo.show');
    Route::delete('articulos/delete/{id}',[ArticuloController::class,'destroy'])->name('articulo.destroy');

    #*********************Libros*****************************
    Route::get('libros/index',[LibroController::class,'index'])->name('libros.index');
    Route::get('libros/create',[LibroController::class,'create'])->name('libros.create');
    Route::post('libros/store',[LibroController::class,'store'])->name('libros.store');
    Route::get('libros/show/{id}',[LibroController::class,'show'])->name('libros.show');
    Route::delete('libros/delete/{id}',[LibroController::class,'destroy'])->name('libros.destroy');

    #*********************Tesis*****************************
    Route::get('tesis/index',[TesisController::class,'index'])->name('tesis.index');
    Route::get('tesis/create',[TesisController::class,'create'])->name('tesis.create');
    Route::post('tesis/store',[TesisController::class,'store'])->name('tesis.store');
    Route::get('tesis/show/{id}',[TesisController::class,'show'])->name('tesis.show');
    Route::delete('tesis/delete/{id}',[TesisController::class,'destroy'])->name('tesis.destroy');

});

require __DIR__.'/auth.php';
