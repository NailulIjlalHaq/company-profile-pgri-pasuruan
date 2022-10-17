<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\categories;
use Illuminate\Http\Request;
use DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $data = categories::select('id_categories', 'name')->whereNotIn('id_categories', $this->kategoriLembaga);
            return DataTables()->of($data)
                ->addColumn('action', function ($row) {
                    return '
                    <a href="' . route('kategori.destroy', $row->id_categories) . '" class="btn bg-teal btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini ?\')">Hapus</a>
                    <a href="' . route('kategori.edit', $row->id_categories) . '" class="btn btn-primary btn-sm">Edit</a>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriRequest $request)
    {
        try {
            $kategori = new categories;
            $kategori->name = $request->kategori;
            $kategori->type = 'berita';
            $kategori->save();

            return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil disimpan.');
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
        $kategori = categories::find($id);
        return view('backend.kategori.form', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KategoriRequest $request, $id)
    {
        $kategori = categories::find($id);
        $kategori->name = $request->kategori;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Data kategori berhasil di ubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categories::destroy($id);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil di hapus dari sistem');
    }
}
