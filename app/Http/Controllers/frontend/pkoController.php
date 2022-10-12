<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\pages;
use App\Models\posts;
use Illuminate\Http\Request;

class pkoController extends Controller
{
    public function pko(Request $request)
    {
        $sambutan = pages::find(1);
        $berita = posts::with('users')->where('type', 'berita');

        if ($request->has('search')) {
            $berita = $berita->where('title', 'LIKE', '%' . $request->search . '%');
        }

        $berita = $berita->latest()->paginate(6);
        return view('frontend.pko', compact('sambutan', 'berita'));
    }
}
