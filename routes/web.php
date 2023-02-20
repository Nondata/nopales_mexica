<?php

use App\Http\Controllers\Admin;
use App\Http\Livewire\ModulosAdmin\NuevoTrabajador\CreateUsuario;
use App\Http\Livewire\ModulosAlmacen\HomeAlmacen;
use App\Http\Livewire\ModulosCoccion\HomeCoccion;
use App\Http\Livewire\ModulosPelado\HomePelado;
use App\Http\Livewire\ModulosRecepcion\HomeRecepcion;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Admin::class, 'index']);
Route::get('/home', [Admin::class, 'home'])->name('admin');
Route::get('/recepcion', [HomeRecepcion::class, 'render'])->name('recepcion');
Route::get('/pelado', [HomePelado::class, 'render'])->name('pelado');
Route::get('/coccion', [HomeCoccion::class, 'render'])->name('coccion');
Route::get('/almacen', [HomeAlmacen::class, 'render'])->name('almacen');
Route::get('/home/new_usuario', [Admin::class, 'nuevo_trabajador'])->name('nuevo-usuario');





