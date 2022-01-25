<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetalleController;
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

Route::get('/', [DetalleController::class,'index'])->name('detalle');
Route::post('/enviar',[DetalleController::class,'store'])->name('detalle.enviar');
