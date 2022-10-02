<?php

namespace App\Http\Controllers\backend;

use DataTables;

use App\Models\galleries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = galleries::with('users')->select('id_galleries', 'name', 'file', 'id_user');
            return DataTables::of($data)
              ->editColumn('file', function($row){
                	return asset($row->file);
                })
                ->editColumn('name', function ($row) {

                    // Menampilkan judul galeri beserta tombol aksi
                    return '
                    <h2 class="lead mb-0"><b>' . $row->name . '</b></h2>
                    <p class="text-muted">
                        <small><b>Diposting oleh:</b> ' . $row->users->name . '</small>
                    </p>
                    <div class="mt-3">
                        <a href="' . route('galeri.destroy', $row->id_galleries) . '" class="btn bg-teal btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini ?\')">Hapus</a>
                        <a href="' . route('galeri.edit', $row->id_galleries) . '" class="btn btn-primary btn-sm">Edit</a>
                    </div>
                    ';
                })
                ->rawColumns(['name'])
                ->make(true);
        }

        return view('backend.galeri.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //memberikan status edit form false untuk digunakan untuk menampilkan form tambah
        $isEdit = false;
        return view('backend.galeri.form', compact('isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleriRequest $request)
    {
        try {

            // Memanggil fungsi untuk mengupload gambar cover
            $imagePath = $this->uploadCover($request->file);

            // Fungsi untuk menyimpan semua data
            $post = new galleries;
            $post->name = $request->name;
            $post->description = $request->description;
            $post->file = $imagePath;
            $post->id_user = auth()->user()->id;
            $post->save();

            // Fungsi untuk menuju halaman index dan memberikan pesan sukses
            return redirect()->route('galeri.index')->with('success', 'Galeri berhasil disimpan dan di publish.');
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
        // Fungsi untuk mengambil data galeri sesuai dengan id
        $post = galleries::find($id);

        // Mengeset status edit untuk menampilkan form edit galeri
        $isEdit = true;

        return view('backend.galeri.form', compact('post', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleriRequest $request, $id)
    {

        // Fungsi untuk mengambil data galeri sesuai dengan id
        $post = galleries::find($id);

        // Fungsi untuk mengeck apabila cover img tidak kosong
        // dan mengganti cover img lama dengan yang baru
        if (!empty($request->file)) {
            unlink($post->file);
            $imagePath = $this->uploadCover($request->file);
            $post->file = $imagePath;
        }

        // fungsi untuk mengupdate data galeri sesuai dengan id
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diubah dan di publish.');
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
        $post = galleries::find($id);
        // Mengeset ke dalam folder image cover diupload
        $imagePath = public_path($post->file);

        // Mengecek dan menghapus file cover image pada server
        if ($imagePath) {
            unlink($post->file);
        }

        // Fungsi untuk menghapus data post pada database
        galleries::destroy($id);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus dari sistem.');
    }

    public function uploadCover($imageFile)
    {
        $extFile = $imageFile->getClientOriginalName();
        $path = $imageFile->move('file_upload', 'file_' . time() . '.' . $extFile);
        $path = str_replace('\\', '/', $path);

        return $path;
    }
}
