<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index()
    {
        $artikel = posts::where('type', "artikel")->get();
        return view('frontend.artikel', ['artikel' => $artikel]);
    }

    public function detail($id)
    {
        $artikel = posts::where('type', "artikel")->get();
        $item = posts::find($id);
        return view('frontend.detailArtikel', ['item'=> $item, 'artikel'=>$artikel]);
    }
}
