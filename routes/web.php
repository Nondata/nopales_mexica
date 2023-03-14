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
    });
    Route::get('/campo', [Admin::class, 'campo'])->name('campo');
    Route::get('/desespinado', [Admin::class, 'desespinado'])->name('desespinado');
    Route::get('/produccion', [Admin::class, 'produccion'])->name('produccion');
    Route::get('/almacen', [Admin::class, 'almacen'])->name('almacen');
    Route::get('/recepcion', [Admin::class, 'recepcion'])->name('recepcion');
});





