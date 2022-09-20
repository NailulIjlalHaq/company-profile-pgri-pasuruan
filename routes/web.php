<?php
// frontend Controller
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\artikelController;
use App\Http\Controllers\frontend\beritaController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\galleryController;
// backend Controller
use App\Http\Controllers\backend\ArtikelController as BackendArtikelController;
use App\Http\Controllers\backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\KategoriController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PengaturanController;
use App\Http\Controllers\backend\PengumumanController;
use Illuminate\Support\Facades\Route;

//index route
Route::get('/', [homeController::class, 'index'])->name('feHome');

//about route
Route::get('/about', [aboutController::class, 'index'])->name('feAbout');
Route::get('/profile-sejarah', [aboutController::class, 'sejarah'])->name('profile-sejarah');
Route::get('/profile-makna', [aboutController::class, 'makna'])->name('profile-makna');
Route::get('/profile-visi-misi', [aboutController::class, 'visiMisi'])->name('profile-visi-misi');

//artikel route
Route::get('/artikel', [artikelController::class, 'index'])->name('feArtikel');
Route::get('/detailArtikel', [artikelController::class, 'detail'])->name('feDetailArtikel');

//berita route
Route::get('/berita', [beritaController::class, 'index'])->name('feBerita');
Route::get('/detailBerita', [beritaController::class, 'detail'])->name('feDetailBerita');

//gallery route
Route::get('/gallery', [galleryController::class, 'index'])->name('feGallery');

//contact route
Route::get('/contact', [contactController::class, 'index'])->name('feContact');


//
// Bagian route untuk backend
Route::prefix('backends')->group(function () {
    // Rute untuk fitur page
    Route::get('/', [PageController::class, 'index'])->name('home');

    // Rute untuk fitur pengumuman
    Route::resource('pengumuman', PengumumanController::class)->except(['destroy']);
    Route::get('pengumuman/{pengumuman}/hapus', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    // Rute untuk fitur berita
    Route::get('berita/fokus', [BackendBeritaController::class, 'setFocus'])->name('berita.setFocus');
    Route::resource('berita', BackendBeritaController::class)->except(['destroy']);
    Route::get('berita/{berita}/hapus', [BackendBeritaController::class, 'destroy'])->name('berita.destroy');

    // Rute untuk fitur artikel
    Route::resource('artikel', BackendArtikelController::class)->except(['destroy']);
    Route::get('artikel/{artikel}/hapus', [BackendArtikelController::class, 'destroy'])->name('artikel.destroy');

    // Rute untuk fitur galeri
    Route::resource('galeri', GaleriController::class)->except(['destroy']);
    Route::get('galeri/{galeri}/hapus', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    // Rute untuk fitur pengaturan
    Route::resource('pengaturan', PengaturanController::class);

    // Rute untuk fitur kategori
    Route::resource('kategori', KategoriController::class)->except(['destroy']);
    Route::get('kategori/{kategori}/hapus', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});
