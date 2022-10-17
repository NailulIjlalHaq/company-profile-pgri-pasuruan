<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\configs;
use App\Models\posts;
use App\Models\pages;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $beritaAtas = posts::with('users')->where('type', 'berita')->where('is_focus', 1)->latest()->limit(4)->get();
        $sambutan = pages::find(1);
        $artikel = posts::where('type', 'artikel')->latest()->limit(5)->get();
        $botBerita = posts::where('type', 'berita')->whereNotIn('id_categories', $this->kategoriLembaga)->where('is_focus', 0)->latest()->limit(4)->get();
        $pengumuman = posts::where('type', 'pengumuman')->where('is_focus', '1')->limit(3)->get();

        return view('frontend.home', compact('beritaAtas', 'sambutan', 'artikel', 'botBerita', 'pengumuman'));
    }
    public function detailSambutan()
    {
        $sambutan = pages::find(1);
        return view('frontend.detailSambutan', compact('sambutan'));
    }

    public function notFound()
    {
        return view('frontend.404');
    }
    public function error()
    {
        return view('frontend.500');
    }

    public function footer()
    {
    }
}
