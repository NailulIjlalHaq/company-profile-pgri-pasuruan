<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PengumumanController;
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

Route::get('/',[PageController::class, 'index'])->name('home');
Route::resource('pengumuman',PengumumanController::class);
Route::resource('berita',BeritaController::class);
Route::resource('artikel',ArtikelController::class);
Route::resource('galleries',GaleriController::class);
Route::resource('pengaturan',PengaturanController::class);
Route::resource('kategori',KategoriController::class);
