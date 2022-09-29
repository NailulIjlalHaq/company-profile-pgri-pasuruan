<?php


namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function index()
    {
        $photos =  galleries::latest()->simplePaginate(6);
        return view('frontend.gallery', ['photos' => $photos]);
    }
}
