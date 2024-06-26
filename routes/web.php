<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestamoController;

Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'login'])->name('login.autenticar');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');

Route::resource('usuarios', UsuarioController::class);
Route::resource('roles', RoleController::class);
Route::resource('libros', LibroController::class);

Route::resource('prestamos', PrestamoController::class)->except(['edit', 'update', 'destroy']);
Route::put('prestamos/{prestamo}/devolver', [PrestamoController::class, 'devolver'])->name('prestamos.devolver');