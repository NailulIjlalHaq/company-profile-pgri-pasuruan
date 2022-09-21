<?php

namespace App\Http\Controllers\backend;

use Yajra\DataTables\DataTables;

use App\Http\Controllers\Controller;
use App\Models\pages;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = pages::select('id_pages','title','content');
            return DataTables::of($data)
                ->editColumn('title', function ($row) {
                    // Memberikan dan mengecek status fokus berita
                    $is_focus = $row->is_focus ? 'Nonaktifkan' : 'Fokuskan';

                    // Menampilkan judul berita beserta tombol aksi
                    return '
                    <h2 class="lead mb-0"><b>' . $row->title . '</b></h2>
                    <p class="text-muted">
                        <small><b>Isi - </b>' . $row->content . '</small>
                    </p>
                    <div class="mt-3">
                        <a href="' . route('visimisi.destroy', $row->id_pages) . '" class="btn bg-teal btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini ?\')">Hapus</a>
                        <a href="' . route('visimisi.edit', $row->id_pages) . '" class="btn btn-primary btn-sm">Edit</a>
                    </div>
                    ';
                })
                ->rawColumns(['title'])
                ->make(true);
        }

        return view('backend.pengaturan.visimisi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    {// Fungsi untuk mengambil data berita sesuai dengan id
        $page = pages::find($id);

        // Mengeset status edit untuk menampilkan form edit berita
        $isEdit = true;

        return view('backend.pengaturan.visimisi.form', compact('page','isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Memanggil fungsi untuk meload semua konten yang ada di summernote dan mengupload gambar
        // dan mengembalikan dalam bentuk html
        $konten = $this->loadContent($request->konten);

        // Fungsi untuk mengambil data berita sesuai dengan id
        $page = pages::find($id);

        // fungsi untuk mengupdate data berita sesuai dengan id
        $page->content = $konten;
        $page->save();

        return redirect()->route('visimisi.index')->with('success', 'Berita berhasil diubah dan di publish.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loadContent($content)
    {
        // Fungsi untuk meload konten summernote dan mengupload gambar pada konten
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_NOWARNING | LIBXML_NOERROR);
        return $dom->saveHTML();
    }
}
