<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index()
    {
        $artikel = posts::get();
        return view('frontend.artikel', ['artikel'=>$artikel]);
    }

    public function detail()
    {
        return view('frontend.detailArtikel');
    }
}
