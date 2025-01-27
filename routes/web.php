<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playas', function () {
    return view('playas');
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

Route::get('/libros/alta',       [LibrosController::class, 'mostrar_formulario']);
Route::post('/libros/alta',      [LibrosController::class, 'procesar']);

Route::get('/libros',       [LibrosController::class, 'mostrar_libros']);

Route::get('/libros/eliminar/{id}',       [LibrosController::class, 'eliminar_libro']);

Route::get('/libros/actualizar/{id}',       [LibrosController::class, 'actualizar_libro']);
Route::post('/libros/actualizar/{id}',       [LibrosController::class, 'procesar_actualizar_libro']);
