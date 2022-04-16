<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSUBMITController extends Controller
{
    public function book(){
        return view('pages.book');
    }
    public function submit(Request $request)
    {
      print_r($request->all());
    }
}
