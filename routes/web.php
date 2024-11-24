<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

//Ruta para el login
Route::get('/', function () {
    return redirect('/login');
});
//Ruta de  predeterminadas de Jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); //La vista predeterminada
    })->name('dashboard');
});

// Ruta que es para el CRUD de los productos
Route::middleware(['auth'])->group(function () {
    Route::resource('productos', ProductoController::class);
});
