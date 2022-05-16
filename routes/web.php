<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('inicio');

Route::get('/usuarios/personas/agregarpersona', [HomeController::class, 'agregarpersona'])->name('agregarpersona');

Route::post('/usuarios/agregarpersona/guardarpersona', [HomeController::class, 'guardarpersona'])->name('guardarpersona');

Route::get('/usuarios/verpersonas', [HomeController::class,'verpersonas'])->name('verpersonas');

Route::delete('/usuarios/eliminarusuario/{id}', [HomeController::class,'eliminarusuario'])->name('eliminarusuario');

Route::get('/usuarios/verpersonas/editar/{id}', [HomeController:: class,'editardatos'])
->name('editardatos');

Route::put('/usuarios/verpersonas/guardardatoseditados/{persona}', [HomeController:: class,'guardardatos'])
->name('guardardatos');

