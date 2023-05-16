<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
Route::get('/', [Admin::class, 'index'])->name('index');

Route::middleware(['auth'])->group( function(){

    Route::get('/home', [Admin::class, 'home'])->name('admin');
    Route::prefix('home')->group(function(){
        Route::get('/new_usuario', [Admin::class, 'nuevo_trabajador'])->name('nuevo-usuario');
        Route::get('/edit/{user}', [Admin::class, 'edit'])->name('edit');
        Route::get('/producto', [Admin::class, 'producto'])->name('producto');
        Route::get('/nuevo_producto', [Admin::class, 'nuevo_producto'])->name('nuevo_producto');
        Route::get('/nuevo_producto/editar-producto/{producto}', [Admin::class, 'edit_producto'])->name('editar');
        Route::get('/salida', [Admin::class, 'salida_producto'])->name('salidas');
        Route::get("/data", [Admin::class, 'exportarDatos'])->name('exportar');
    });
    Route::get('/campo', [Admin::class, 'campo'])->name('campo');
    Route::prefix('campo')->group(function(){
        Route::get('lista', [Admin::class, 'lista_campo'])->name('lista_campo');
    });

    Route::get('/desespinado', [Admin::class, 'desespinado'])->name('desespinado');
    Route::prefix('desespinado')->group(function(){
        Route::get('lista', [Admin::class, 'lista_desespinado'])->name('lista_desespinado');
    });
    Route::get('/produccion', [Admin::class, 'produccion'])->name('produccion');
    Route::prefix('produccion')->group(function(){
        Route::get('lista', [Admin::class, 'lista_produccion'])->name('lista_produccion');
    });
    Route::get('/almacen', [Admin::class, 'almacen'])->name('almacen');
    
    Route::get('/empaque', [Admin::class, 'empaque'])->name('empaque');
    Route::prefix('empaque')->group(function(){
        Route::get('lista', [Admin::class, 'lista_empaque'])->name('lista_empaque');
    });

    Route::get('/recepcion', [Admin::class, 'recepcion'])->name('recepcion');
    Route::prefix('recepcion')->group(function(){
        Route::get('lista', [Admin::class, 'lista_recepcion'])->name('lista_recepcion');
    });
});






