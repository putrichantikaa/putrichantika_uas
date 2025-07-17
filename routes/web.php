<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengambilanController;


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

//Data Resep
Route::get('/resep', [resepController::class, 'index']);
Route::get('/resep/tambah', [resepController::class, 'create']);
Route::post('/resep', [resepController::class, 'store']);
Route::get('/resep/edit/{id}', [resepController::class, 'edit']);
Route::put('/resep/{id}', [resepController::class, 'update']);
Route::delete('/resep/{id}', [resepController::class, 'destroy']);

//Data Pengambilan Obat
Route::get('/pengambilan', [pengambilanController::class, 'index']);
Route::get('/pengambilan/tambah', [pengambilanController::class, 'create']);
Route::post('/pengambilan', [pengambilanController::class, 'store']);
Route::get('/pengambilan/edit/{id}', [pengambilanController::class, 'edit']);
Route::put('/pengambilan/{id}', [pengambilanController::class, 'update']);
Route::delete('/pengambilan/{id}', [pengambilanController::class, 'destroy']);

