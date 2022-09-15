<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\posts;
use Illuminate\Http\Request;
use DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = posts::select('*');
            return DataTables::of($data)->make(true);
            
        }

        return view('berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'title' => 'required',
            'content'    => 'required',
            'cover_img'          => 'required',
            'tag'          => 'required',
            'id_categories'          => 'required',
            'is_focus'          => 'required',
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('cover_img');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file_upload', $file->getClientOriginalName());


        $upload = new posts();
        $upload->cover_img       = $nama_file;
        $upload->title = $request->input('title');
        $upload->content = $request->input('content');
        $upload->tag = $request->input('tag');
        $upload->id_categories = $request->input('id_categories');
        $upload->is_focus = $request->input('is_focus');

        //menyimpan data ke database
        $upload->save();

        //kembali ke halaman sebelumnya
        return view('berita.index');
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
        //
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
        //
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
}
