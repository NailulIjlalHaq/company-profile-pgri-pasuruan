<?php
// frontend Controller
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\frontend\aboutController;
// backend Controller
use App\Http\Controllers\frontend\beritaController;
use App\Http\Controllers\backend\KategoriController;
use App\Http\Controllers\frontend\artikelController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\galleryController;
use App\Http\Controllers\backend\PengaturanController;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\SummernoteController;
use App\Http\Controllers\backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\backend\ArtikelController as BackendArtikelController;
use App\Http\Controllers\frontend\SitemapController;

Route::get('/not-found', [homeController::class, 'notFound']);
Route::get('/error', [homeController::class, 'error']);
Route::get('/backend',function(){
	return view('errors.404');
});

//index route
Route::get('/', [homeController::class, 'index'])->name('feHome');

//about route
Route::get('/about', [aboutController::class, 'index'])->name('feAbout');
Route::get('/profil/{profil}', [aboutController::class, 'page'])->name('feProfil');
// Route::get('/profile-sejarah', [aboutController::class, 'sejarah'])->name('profile-sejarah');
// Route::get('/profile-makna', [aboutController::class, 'makna'])->name('profile-makna');
// Route::get('/profile-visi-misi', [aboutController::class, 'visiMisi'])->name('profile-visi-misi');

//artikel route
Route::get('/artikel', [artikelController::class, 'index'])->name('feArtikel');
Route::get('/detail-artikel/{id}/{slug}', [artikelController::class, 'detail'])->name('feDetailArtikel');

//berita route
Route::get('/berita', [beritaController::class, 'index'])->name('feBerita');
Route::get('/detail-berita/{id}/{slug}', [beritaController::class, 'detail'])->name('feDetailBerita');

//gallery route
Route::get('/gallery', [galleryController::class, 'index'])->name('feGallery');

//contact route
Route::get('/contact', [contactController::class, 'index'])->name('feContact');

//Generate Sitemap
Route::get('sitemap.xml', [SitemapController::class, 'index'])->name('feSitemap');

//
// Bagian route untuk backend
Route::prefix('backends')->group(function () {
    Route::get('/', [UserController::class, 'login'])->name('login.index');
    Route::post('/login', [UserController::class, 'doLogin'])->name('login.check');

    Route::middleware(['auth', 'prevent-back-login'])->group(function () {
        Route::get('/logout', [UserController::class, 'doLogout'])->name('logout');
        // Rute untuk fitur page
        Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

        // Rute untuk fitur pengumuman
        Route::get('pengumuman/fokus', [PengumumanController::class, 'setFocus'])->name('pengumuman.setFocus');
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

        // Rute untuk fitur kategori
        Route::resource('kategori', KategoriController::class)->except(['destroy']);
        Route::get('kategori/{kategori}/hapus', [KategoriController::class, 'destroy'])->name('kategori.destroy');

        // Rute untuk user
        Route::resource('user', UserController::class)->except(['destroy'])->middleware('is_admin');;
        Route::get('user/{user}/hapus', [UserController::class, 'destroy'])->name('user.destroy')->middleware('is_admin');;

        // Rute untuk ubah profil
        Route::get('user-profil/{user}', [UserController::class, 'userProfil'])->name('userProfil.index');
        Route::post('user-profil/{user}', [UserController::class, 'updateProfil'])->name('userProfil.update');

        // Rute untuk mengedit halaman profil
        Route::get('profil/{page}', [PageController::class, 'index'])->name('profil.index')->middleware('is_admin');;
        Route::post('profil/{page}', [PageController::class, 'update'])->name('profil.update')->middleware('is_admin');;

        // Rute untuk mengedit halaman pengaturan
        Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index')->middleware('is_admin');
        Route::post('pengaturan', [PengaturanController::class, 'store'])->name('pengaturan.store')->middleware('is_admin');

        // Rute untuk penghapusan gambar summernote
        Route::post('summernote/delete', [SummernoteController::class, 'deleteImage'])->name('summernote.delete');

        Route::get('unauthorized', function () {
            return view('backend.extra.401');
        })->name('unauthorized');
    });
});
