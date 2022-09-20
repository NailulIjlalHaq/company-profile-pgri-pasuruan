<?php

namespace App\Http\Controllers\backend;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('id', 'name', 'username', 'email', 'is_admin');
            $data = $data->whereNotIn('id', [1]);
            return DataTables::of($data)
                ->editColumn('name', function ($row) {
                    return '
                    <h5 class="lead mb-0"><b>' . $row->name . '</b></h5>
                    <p class="text-muted">
                        <small>' . $row->email . '</small>
                    </p>
                    ';
                })
                ->editColumn('is_admin', function ($row) {
                    if ($row->is_admin) {
                        return '
                            <span class="badge badge-primary">Administrator</span>
                        ';
                    } else {
                        return '
                            <span class="badge badge-success">Penulis</span>
                        ';
                    }
                })
                ->addColumn('action', function ($row) {
                    return '
                    <a href="' . route('user.destroy', $row->id) . '" class="btn bg-teal btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini ?\')">Hapus</a>
                    <a href="' . route('user.edit', $row->id) . '" class="btn btn-primary btn-sm">Edit</a>
                    ';
                })
                ->rawColumns(['name', 'is_admin', 'action'])
                ->make(true);
        }
        return view('backend.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $user = new User;
            $user->name = $request->nama;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->is_admin = $request->tipe;
            $user->save();

            return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan ke dalam sistem.');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', 'Terjadi kesalahan pada sistem.');
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
        $user = User::find($id);

        return view('backend.user.form', compact('user'));
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
        try {
            $user = User::find($id);
            $user->name = $request->nama;
            $user->username = $request->username;
            $user->email = $request->email;

            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }

            $user->is_admin = $request->tipe;
            $user->save();

            return redirect()->route('user.index')->with('success', 'Data user berhasil disimpan ke dalam sistem.');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', 'Terjadi kesalahan pada sistem.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::destroy($id);

            return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus ke dalam sistem.');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('error', 'Terjadi kesalahan pada sistem.');
        }
    }
}
