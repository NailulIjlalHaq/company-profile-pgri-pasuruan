<?php

use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\artikelController;
use App\Http\Controllers\frontend\beritaController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\galleryController;
use Illuminate\Support\Facades\Route;

//index route
Route::get('/', [homeController::class, 'index'])->name('home');

//about route
Route::get('/about', [aboutController::class, 'index'])->name('about');

//artikel route
Route::get('/artikel', [artikelController::class, 'index'])->name('artikel');
Route::get('/detailArtikel', [artikelController::class, 'detail'])->name('detailArtikel');

//berita route
Route::get('/berita', [beritaController::class, 'index'])->name('berita');
Route::get('/detailBerita', [beritaController::class, 'detail'])->name('detailBerita');

//gallery route
Route::get('/gallery', [galleryController::class, 'index'])->name('gallery');

//contact route
Route::get('/contact', [contactController::class, 'index'])->name('contact');
