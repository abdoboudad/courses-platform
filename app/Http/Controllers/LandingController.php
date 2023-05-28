<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function contact(){
        return view('landing.pages.contact');
    }

    public function services(){
        return view('landing.pages.services');
    }
    
    public function about(){
        return view('landing.pages.about');
    }
}
