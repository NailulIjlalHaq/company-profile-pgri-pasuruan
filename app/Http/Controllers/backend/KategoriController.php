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
        if(request()->ajax()) {
            return DataTables()->of(categories::select('*'))
            ->addColumn('action', `<a class="btn btn-warning" href="">edit</a>`)
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $companyId = $request->id;
 
        $company   =   categories::updateOrCreate(
                    [
                     'id' => $companyId
                    ],
                    [
                    'name' => $request->name, 
                    'email' => $request->email,
                    'address' => $request->address
                    ]);    
                         
        return Response()->json($company);
 
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
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $company  = categories::where($where)->first();
      
        return Response()->json($company);
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
        $post = categories::find($id)->update($request->all());
        return back()->with('success', 'Data telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $company = categories::where('id',$request->id)->delete();
      
        return Response()->json($company);
    }
}
