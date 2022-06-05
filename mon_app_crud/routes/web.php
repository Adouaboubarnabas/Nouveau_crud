<?php

use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\AbonneController;




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

Route::get('/', [AbonneController::class, 'index'])->name('abonnes.index');

Route::get('/abonne', [AbonneController::class, 'create'])->name('abonne');
Route::post('/abonnes.store', [AbonneController::class, 'store'])->name('abonnes.store');

Route::get('edit/{id}', [AbonneController::class, 'edit']);

Route::put('update-data/{id}',[AbonneController::class, 'udapte'])->name('update-data');

Route::get('delete/{id}', [AbonneController::class, 'remove'])->name('abonnes.delete');
