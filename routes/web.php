<?php

use App\Http\Controllers\{PendudukController, DesaController, AgamaController, OpdController, PekerjaanController, TahunController};
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/penduduks/index', [PendudukController::class, 'index'])->name('penduduks.index');

// desa
Route::get('/desa/index', [DesaController::class, 'index'])->name('desa.index');
Route::post('/desa/store', [DesaController::class, 'store'])->name('desa.store');
Route::get('/desa/edit/{id}', [DesaController::class, 'edit'])->name('desa.edit');
Route::post('/desa/update/{id}', [DesaController::class, 'update'])->name('desa.update');
Route::get('/desa/destroy/{id}', [DesaController::class, 'destroy'])->name('desa.destroy');

// Agama
Route::get('/agama/index', [AgamaController::class, 'index'])->name('agama.index');
Route::post('/agama/store', [AgamaController::class, 'store'])->name('agama.store');
Route::get('/agama/destroy/{id}', [AgamaController::class, 'destroy'])->name('agama.destroy');

// opd
Route::get('/opd/index', [OpdController::class, 'index'])->name('opd.index');
Route::post('/opd/store', [OpdController::class, 'store'])->name('opd.store');
Route::get('/opd/destroy/{id}', [OpdController::class, 'destroy'])->name('opd.destroy');

// pekerjaan
Route::get('/pekerjaan/index', [PekerjaanController::class, 'index'])->name('pekerjaan.index');
Route::post('/pekerjaan/store', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
Route::get('/pekerjaan/destroy/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');

// tahun
Route::get('/tahun/index', [TahunController::class, 'index'])->name('tahun.index');
Route::post('/tahun/store', [TahunController::class, 'store'])->name('tahun.store');
Route::get('/tahun/destroy/{id}', [TahunController::class, 'destroy'])->name('tahun.destroy');
