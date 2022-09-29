<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\configs;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $configs = configs::get();
        return view('frontend.contact', compact('configs'));
    }
}
