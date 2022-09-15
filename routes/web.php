<?php

use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\artikelController;
use App\Http\Controllers\frontend\beritaController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\galleryController;
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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');
Route::get('/contact', [contactController::class, 'index'])->name('contact');
Route::get('/berita', [beritaController::class, 'index'])->name('berita');
Route::get('/gallery', [galleryController::class, 'index'])->name('gallery');
