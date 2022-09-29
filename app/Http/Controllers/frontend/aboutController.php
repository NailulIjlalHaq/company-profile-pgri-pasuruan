<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\pages;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function page($profil)
    {
        $page = pages::find($profil);
        return view('frontend.profile-page', compact('page'));
    }
}
