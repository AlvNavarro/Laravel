<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FacturaController;

// 1. Al entrar a la web, si no está logueado va DIRECTO al login. 
// Eliminamos el 'welcome' para que no se vea la página rota.
Route::get('/', function () {
    return auth()->check() ? redirect('/home') : redirect('/login');
});

// 2. Rutas de Autenticación
Auth::routes();

// 3. Rutas protegidas
Route::middleware(['auth'])->group(function () {
    
    // El /home ahora será tu "Centro de mando" (Dashboard)
    Route::get('/home', function () {
        return view('home'); 
    })->name('home');

    // Los 5 módulos del CRM
    Route::resource('clientes', ClienteController::class);
    // Cambiamos el alias de proveedores para que coincida con el menú
    Route::resource('proveedores', ProveedorController::class)->names('proveedores');
    Route::resource('productos', ProductoController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('facturas', FacturaController::class);
    
    // Perfil de usuario
    Route::get('/admin/settings', function () {
        return view('home'); 
    });
});