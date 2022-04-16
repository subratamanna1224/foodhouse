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
    
    public function menu(){
        return view('pages.menu');
    }
    // public function index(){
    //     return view('index');
    // }
  

}
