<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigRequest;
use App\Models\configs;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = configs::latest()->get();
        return view('backend.pengaturan.form', compact('configs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->id as $id) {
            $config = configs::find($id);
            $config->data = $request->value[$id];
            $config->save();
        }

        return redirect()->route('pengaturan.index')->with('success', 'Pengaturan berhasil disimpan');
    }
}
