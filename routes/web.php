<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RfidTagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RfidTagController::class, 'index']);

Route::get('/rfid/{id}', [RfidTagController::class, 'rfid']);
Route::get('/mode', [RfidTagController::class, 'mode']);

Route::get('/reader', [RfidTagController::class, 'reader']);
Route::get('/nokartu', [AnggotaController::class, 'nokartu']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('anggota', AnggotaController::class);
    Route::resource('divisi', DivisiController::class);
    Route::get('/absensi', [AbsenController::class, 'index'])->name('absen');
});

Auth::routes(['register' => false, 'reset' => false]);
