<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;


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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Data Pasien
Route::get('/pasien', [pasienController::class, 'index']);
Route::get('/pasien/tambah', [pasienController::class, 'create']);
Route::post('/pasien', [pasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [pasienController::class, 'edit']);
Route::put('/pasien/{id}', [pasienController::class, 'update']);
Route::delete('/pasien/{id}', [pasienController::class, 'destroy']);

//Data Obat
Route::get('/obat', [obatController::class, 'index']);
Route::get('/obat/tambah', [obatController::class, 'create']);
Route::post('/obat', [obatController::class, 'store']);
Route::get('/obat/edit/{id}', [obatController::class, 'edit']);
Route::put('/obat/{id}', [obatController::class, 'update']);
Route::delete('/obat/{id}', [obatController::class, 'destroy']);
