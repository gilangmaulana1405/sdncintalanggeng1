<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\KontakController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/acara', [AcaraController::class, 'index'])->name('acara');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
