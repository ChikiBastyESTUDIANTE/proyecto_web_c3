<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[InicioController::class,'login'])->name('login');
Route::get('/datos-cuenta',[InicioController::class,'datosCuenta'])->name('login.datosCuenta');
Route::post('/crear-cuenta',[InicioController::class,'crearCuenta'])->name('login.crearCuenta');

Route::get('/perfil',[ArtistaController::class, 'perfil'])->name('artista.perfil');

Route::get('/admin/listar',[AdminController::class,'listarPerfiles'])->name('admin.listarPerfiles');