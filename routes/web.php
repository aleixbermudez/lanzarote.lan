<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', function () {
    return view('users.users');
})->name('users.listado');



Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/libros'                , [LibrosController::class, 'listado'])->name('libros.listado');
    Route::get('/libro/{id}'            , [LibrosController::class, 'mostrar'])->name('libros.mostrar');
    Route::get('/libro/actualizar/{id}' , [LibrosController::class, 'actualizar'])->name('libros.actualizar');
    Route::get('/libro/eliminar/{id}'   , [LibrosController::class, 'eliminar'])->name('libros.eliminar');
    Route::get('/libros/nuevo'          , [LibrosController::class, 'alta'])->name('libros.alta');
    Route::post('/libros/nuevo'         , [LibrosController::class, 'almacenar'])->name('libros.almacenar');

    Route::get('/users'                       , [UsersController::class, 'listado'])->name('users.listado');
    Route::get('/users/nuevo'                 , [UsersController::class, 'formulario'])->name('users.formulario');
    Route::get('/users/alta'                  , [UsersController::class, 'alta'])->name('users.alta');
    Route::post('/users/almacenar'            , [UsersController::class, 'almacenar'])->name('users.almacenar');
    Route::get('/user/{id}'                   , [UsersController::class, 'mostrar'])->name('users.mostrar');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');



require __DIR__.'/auth.php';