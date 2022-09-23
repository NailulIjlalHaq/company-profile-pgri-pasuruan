<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use App\Models\pages;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $beritaAtas = posts::where('type', 'berita')->where('is_focus', 1)->limit(4)->get();
        $sambutan = pages::find(1);
        $artikel = posts::where('type', 'artikel')->limit(5)->get();
        $botBerita = posts::where('type', 'berita')->where('is_focus', 0)->limit(4)->get();

        return view('frontend.home', compact('beritaAtas', 'sambutan', 'artikel', 'botBerita'));
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
}
