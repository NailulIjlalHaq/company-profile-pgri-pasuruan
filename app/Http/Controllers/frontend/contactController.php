<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\configs;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $fb = configs::find(1);
        $ig = configs::find(2);
        $wa = configs::find(3);
        $address = configs::find(4);
        $phone = configs::find(5);
        return view('frontend.contact' , compact('fb', 'ig', 'wa', 'address', 'phone'));
    }
}
