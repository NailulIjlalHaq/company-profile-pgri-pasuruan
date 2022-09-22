<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class artikelController extends Controller
{
    public function index()
    {
        $artikel = posts::where('type', "artikel")->get();
        return view('frontend.artikel', ['artikel' => $artikel]);
    }

    public function detail($id, $slug)
    {
        $artikel = posts::where('type', "artikel")->get();
        $title = Str::of($slug)->slug(" ");
        $item = posts::where('id_posts', $id)->where('title', $title)->first();
        return view('frontend.detailArtikel', ['item' => $item, 'artikel' => $artikel]);
    }
}
