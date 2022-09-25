<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\pages;
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
        $vm = pages::find(2);
        return view('frontend.profile-visi-misi', compact('vm'));
    }
}
