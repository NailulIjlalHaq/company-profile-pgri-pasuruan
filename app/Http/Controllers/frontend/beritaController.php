<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        $beritaAtas = posts::where('type', 'berita')->where('is_focus', 1)->limit(4)->get();
        $berita = posts::where('type', 'berita')->paginate(6);
        return view('frontend.berita', compact('beritaAtas', 'berita'));
    }
    public function detail($id)
    {
        $berita = posts::where('type', 'berita')->limit(2)->get();
        $item = posts::find($id);
        return view('frontend.detailBerita', ['item' => $item, 'berita' => $berita]);
    }
}
