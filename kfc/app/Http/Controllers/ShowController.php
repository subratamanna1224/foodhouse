<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function courses(){
        return view('pages.courses');
    }
    public function team(){
        return view('pages.team');
    }
    public function testimonial(){
        return view('pages.testimonial');
    }
    function contactadd(Request $request)
    {
        
    }
}
