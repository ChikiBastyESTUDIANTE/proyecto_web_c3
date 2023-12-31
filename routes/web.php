<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistaController;
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

Route::get('/',[InicioController::class,'index'])->name('index');
Route::get('/logout',[InicioController::class,'logout'])->name('logout');

Route::get('/login',[InicioController::class,'login'])->name('login');
Route::get('/datos-cuenta',[InicioController::class,'datosCuenta'])->name('login.datosCuenta');
Route::post('/crear-cuenta',[InicioController::class,'crearCuenta'])->name('login.crearCuenta');
Route::post('/logear',[InicioController::class,'inicio'])->name('login.inicio');

Route::get('/perfil',[ArtistaController::class, 'perfil'])->name('artista.perfil');
Route::get('/galeria',[ArtistaController::class, 'galeria'])->name('artista.vista_artista');

Route::get('/admin/listar',[AdminController::class,'listarPerfiles'])->name('admin.listarPerfiles');
Route::get('/admin/imagenes',[AdminController::class,'imagenes'])->name('admin.imagenes');
Route::get('/admin/modificar/{cuenta}',[AdminController::class,'modificar'])->name('admin.modificar');
Route::put('/admin/modificar/{cuenta}',[AdminController::class,'modificarConfirmado'])->name('admin.modificarConfirmado');
Route::delete('/admin/eliminar/{cuenta}',[AdminController::class,'eliminar'])->name('admin.eliminar');