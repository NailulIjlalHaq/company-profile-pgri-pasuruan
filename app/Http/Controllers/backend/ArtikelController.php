<?php

namespace App\Http\Controllers\backend;

use DataTables;

use App\Models\posts;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = posts::with('categories');
            return DataTables::of($data)
                ->editColumn('title', function ($row) {
                    // Memberikan dan mengecek status fokus artikel
                    $is_focus = $row->is_focus ? 'Nonaktifkan' : 'Fokuskan';

                    // Menampilkan judul artikel beserta tombol aksi
                    return '
                    <h2 class="lead mb-0"><b>' . $row->title . '</b></h2>
                    <p class="text-muted">
                        <small><b>Kategori - </b>' . $row->categories->name . '</small>
                    </p>
                    <div class="mt-3">
                        <a href="' . route('artikel.destroy', $row->id_posts) . '" class="btn bg-teal btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini ?\')">Hapus</a>
                        <a href="' . route('artikel.edit', $row->id_posts) . '" class="btn btn-primary btn-sm">Edit</a>
                        <a href="' . route('berita.setFocus', ['id' => $row->id_posts, 'is_active' => $row->is_focus ? false : true]) . '" class="btn btn-primary btn-sm" onclick="return confirm(\'Apakah anda ingin memfokuskan berita di beranda ?\')">' . $is_focus . '</a>
                    </div>
                    ';
                })
                ->rawColumns(['title'])
                ->make(true);
        }

        return view('backend.artikel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fungsi untuk mengambil data kategori dan ditampilkan dalam form artikel
        $kategori = categories::select('id_categories', 'name')->where('type', 'berita')->get();

        //memberikan status edit form false untuk digunakan untuk menampilkan form tambah
        $isEdit = false;
        return view('backend.artikel.form', compact('kategori', 'isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtikelRequest $request)
    {
        try {
            // Memanggil fungsi untuk meload semua konten yang ada di summernote dan mengupload gambar
            // dan mengembalikan dalam bentuk html
            $konten = $this->loadContent($request->konten);

            // Memanggil fungsi untuk mengupload gambar cover
            $imagePath = $this->uploadCover($request->cover_img);

            // Fungsi untuk menyimpan semua data
            $post = new posts;
            $post->title = $request->judul;
            $post->content = $konten;
            $post->id_categories = $request->kategori;
            $post->tag = $request->tag;
            $post->type = 'berita';
            $post->cover_img = $imagePath;
            $post->is_focus = 0;
            $post->save();

            // Fungsi untuk menuju halaman index dan memberikan pesan sukses
            return redirect()->route('artikel.index')->with('success', 'Artikel berhasil disimpan dan di publish.');
        } catch (\Exception $e) {
            print_r($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Fungsi untuk mengambil data artikel sesuai dengan id
        $post = posts::find($id);

        // Fungsi untuk mengambil data kategori untuk di tampilkan dalam form artikel
        $kategori = categories::select('id_categories', 'name')->where('type', 'berita')->get();

        // Mengeset status edit untuk menampilkan form edit artikel
        $isEdit = true;

        return view('backend.artikel.form', compact('post', 'kategori', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtikelRequest $request, $id)
    {
        // Memanggil fungsi untuk meload semua konten yang ada di summernote dan mengupload gambar
        // dan mengembalikan dalam bentuk html
        $konten = $this->loadContent($request->konten);

        // Fungsi untuk mengambil data artikel sesuai dengan id
        $post = posts::find($id);

        // Fungsi untuk mengeck apabila cover img tidak kosong
        // dan mengganti cover img lama dengan yang baru
        if (!empty($request->cover_img)) {
            unlink($post->cover_img);
            $imagePath = $this->uploadCover($request->cover_img);
            $post->cover_img = $imagePath;
        }

        // fungsi untuk mengupdate data artikel sesuai dengan id
        $post->title = $request->judul;
        $post->content = $konten;
        $post->id_categories = $request->kategori;
        $post->tag = $request->tag;
        $post->save();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diubah dan di publish.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fungsi untuk mengambil data post sesuai dengan id
        $post = posts::find($id);
        // Mengeset ke dalam folder image cover diupload
        $imagePath = public_path($post->cover_img);

        // Mengecek dan menghapus file cover image pada server
        if ($imagePath) {
            unlink($post->cover_img);
        }

        // Fungsi untuk menghapus data post pada database
        posts::destroy($id);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus dari sistem.');
    }

    public function setFocus(Request $request)
    {
        // Fungsi untuk mengupload cover image pada server dan di simpan pada folder public
        if ($request->has('id')) {
            $countFokus = posts::where('is_focus', true)->count();
            if ($countFokus > 5) {
                return redirect->route('artikel.index')->with('error', 'Jumlah Artikel yang dapat di set fokus melebihi batas, silahkan nonaktifkan salah satu data.');
            }


            posts::where('id_posts', $request->id)->update(['is_focus' => $request->is_active]);

            return redirect()->route('artikel.index')->with('success', 'Artikel berhasil di ubah');
        }
    }

    public function loadContent($content)
    {
        // Fungsi untuk meload konten summernote dan mengupload gambar pada konten
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_NOWARNING | LIBXML_NOERROR);
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
                $img->setAttribute('src', $image_name);
            }
        }
        return $dom->saveHTML();
    }

    public function uploadCover($imageFile)
    {
        $extFile = $imageFile->getClientOriginalName();
        $path = $imageFile->move('post_cover', 'cover_image_' . time() . '.' . $extFile);
        $path = str_replace('\\', '/', $path);

        return $path;
    }
}
