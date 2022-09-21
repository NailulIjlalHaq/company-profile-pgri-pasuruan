<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        $berita = posts::get();
        return view('frontend.berita', ['berita'=>$berita]);
    }
    public function detail($id){
        return view('frontend.detailBerita');
    }
}
