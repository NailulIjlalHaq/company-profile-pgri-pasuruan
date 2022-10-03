<?php

namespace App\Http\Controllers\backend;

use App\Models\pages;

use App\Models\posts;
use App\Models\galleries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfilRequest;

class PageController extends Controller
{
    public function index($id)
    {
        $page = pages::find($id);

        return view('backend.page.form', compact('page'));
    }

    public function update(UpdateProfilRequest $request, $id)
    {
        // Memanggil fungsi untuk meload semua konten yang ada di summernote dan mengupload gambar
        // dan mengembalikan dalam bentuk html
        $konten = $this->loadContent($request->deskripsi);

        // Fungsi untuk mengambil data berita sesuai dengan id
        $page = pages::find($id);

        // Fungsi untuk mengeck apabila cover img tidak kosong
        // dan mengganti cover img lama dengan yang baru
        if (!empty($request->cover_img)) {
            unlink($page->cover_img);
            $imagePath = $this->uploadCover($request->cover_img);
            $page->cover_img = $imagePath;
        }

        // fungsi untuk mengupdate data berita sesuai dengan id
        $page->content = $konten;
        $page->save();

        return redirect()->route('profil.index', $id)->with('success', $page->title . ' berhasil di simpan.');
    }

    public function dashboard()
    {

        $berita_count = posts::where('type', 'berita')->count();
        $artikel_count = posts::where('type', 'artikel')->count();
        $pengumuman_count = posts::where('type', 'pengumuman')->count();

        $galeri_count = galleries::count();


        return view('backend.dashboard', compact('berita_count', 'artikel_count', 'pengumuman_count', 'galeri_count'));
    }

    public function loadContent($content)
    {
        // Fungsi untuk meload konten summernote dan mengupload gambar pada konten
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $k => $img) {
            $data = $img->getAttribute('src');
            if (strpos($data, 'data:image') !== false) {
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);

                $data = base64_decode($data);

                $image_name = "/content_img/" . time() . $k . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', asset($image_name));
            }
        }
        return $dom->saveHTML();
    }

    public function uploadCover($imageFile)
    {
        $extFile = $imageFile->getClientOriginalName();
        $path = $imageFile->move('post_cover', 'cover_page_' . time() . '.' . $extFile);
        $path = str_replace('\\', '/', $path);

        return $path;
    }
}
