<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class beritaController extends Controller
{
    public function index(Request $request)
    {
        $berita = posts::with('users')->where('type', 'berita')->whereNotIn('id_categories', $this->kategoriLembaga);

        if ($request->has('search')) {
            $berita = $berita->where('title', 'LIKE', '%' . $request->search . '%');
        }

        $berita = $berita->latest()->paginate(6);

        return view('frontend.berita', compact('berita'));
    }
    public function detail($id, $slug)
    {
        $berita = posts::where('type', "berita")->limit(4)->get();
        $title = Str::of($slug)->slug(" ");
        $item = posts::where('id_posts', $id)->where('title', $title)->first();

        // return $item;
        // exit;
        return view('frontend.detailBerita', ['item' => $item, 'berita' => $berita]);
    }
}
