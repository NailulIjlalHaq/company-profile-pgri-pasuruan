<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SummernoteController extends Controller
{
    public function deleteImage(Request $request)
    {
        if ($request->ajax()) {
            $src = $request->src;
            //--> uploads/berkas/1630368882_e4a62568c1b50887a8a5.png

            //https://localhost/ci4summernote/public
            if ($src) {
                $image = str_replace(url('') . "/", "", $src);
                $imagePath = public_path($image);

                if ($imagePath) {
                    unlink($imagePath);

                    return response()->json([
                        'success' => true
                    ]);
                }
            }
        }
    }
}
