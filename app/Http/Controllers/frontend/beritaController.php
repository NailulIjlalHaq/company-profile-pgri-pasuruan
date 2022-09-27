<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class beritaController extends Controller
{
    public function index()
    {
        $beritaAtas = posts::where('type', 'berita')->where('is_focus', 1)->limit(4)->get();
        $berita = posts::with('users')->where('type', 'berita')->paginate(6);
        return view('frontend.berita', compact('beritaAtas', 'berita'));
    }
    public function detail($id, $slug)
    {
        $berita = posts::where('type', "berita")->limit(4)->get();
        $title = Str::of($slug)->slug(" ");
        $item = posts::where('id_posts', $id)->where('title', $title)->first();
        return view('frontend.detailBerita', ['item' => $item, 'berita' => $berita]);
    }
}
