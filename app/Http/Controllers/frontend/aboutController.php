<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function sejarah()
    {
        return view('frontend.profile-sejarah');
    }
    public function makna()
    {
        return view('frontend.profile-makna');
    }
    public function visiMisi()
    {
        return view('frontend.profile-visi-misi');
    }
}
