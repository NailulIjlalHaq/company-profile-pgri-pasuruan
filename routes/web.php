<?php

use App\Http\Controllers\backend\ArtikelController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\KategoriController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PengaturanController;
use App\Http\Controllers\backend\PengumumanController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('pengumuman', PengumumanController::class)->except(['destroy']);
Route::get('pengumuman/{pengumuman}/hapus', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

Route::get('berita/fokus', [BeritaController::class, 'setFocus'])->name('berita.setFocus');
Route::resource('berita', BeritaController::class)->except(['destroy']);
Route::get('berita/{berita}/hapus', [BeritaController::class, 'destroy'])->name('berita.destroy');

Route::resource('artikel', ArtikelController::class)->except(['destroy']);
Route::get('artikel/{artikel}/hapus', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

Route::resource('galeri', GaleriController::class)->except(['destroy']);
Route::get('galeri/{galeri}/hapus', [GaleriController::class, 'destroy'])->name('galeri.destroy');

Route::resource('pengaturan', PengaturanController::class);

Route::resource('kategori', KategoriController::class)->except(['destroy']);
Route::get('kategori/{kategori}/hapus', [KategoriController::class, 'destroy'])->name('kategori.destroy');
