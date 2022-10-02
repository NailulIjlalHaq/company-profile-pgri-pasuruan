<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class artikelController extends Controller
{
    public function index(Request $request)
    {
        $artikel = posts::with('users')->where('type', 'artikel');

        if ($request->has('search')) {
            $berita = $artikel->where('title', 'LIKE', '%' . $request->search . '%');
        }

        $artikel = $artikel->latest()->paginate(6);

        return view('frontend.artikel', compact('artikel'));
    }

    public function detail($id, $slug)
    {
        $artikel = posts::where('type', "artikel")->get();
        $title = Str::of($slug)->slug(" ");
        $item = posts::where('id_posts', $id)->where('title', $title)->first();
      
        return view('frontend.detailArtikel', ['item' => $item, 'artikel' => $artikel]);
    }
}
