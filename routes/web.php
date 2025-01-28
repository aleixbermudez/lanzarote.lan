<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacto', function () {
    $url = route('contacto'); 
    return 'Página de contacto';
})->name('contacto');

Route::get('/login', function() {
    return 'Esto es la página del login!';
})->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/usuarios', function () {
        return 'Gestión de usuarios';
    });
    Route::get('/admin/configuracion', function () {
        return 'Configuración del sistema';
    });
});

Route::get('/libros',       [LibrosController::class, 'mostrar_libros']);

Route::get('/libros/alta',       [LibrosController::class, 'mostrar_formulario']);
Route::post('/libros/alta',      [LibrosController::class, 'procesar']);

Route::get('/libros/eliminar/{id}',       [LibrosController::class, 'eliminar']);
