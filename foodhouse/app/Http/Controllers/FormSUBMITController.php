<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Submitorder;

class FormSUBMITController extends Controller
{
    public function book(){
        return view('pages.book');
    }
    public function submit(Request $request)

     { $validator = Validator::make(
        [
          'name'=> $request-> post ('name'),
          'phone_number'=> $request-> post ('phone_number'),
          'email'=> $request-> post ('email'),
          'address'=> $request-> post ('address'),


        ],


        // $vaidate=$request->validate(
        [
          'name'=> 'required|max:255',
          'phone_number'=> 'required|max:10|',
          'email'=> 'required|max:255|email',
          'address'=> 'required|max:255|',


        ]

        );

        if ($validator->fails()){
          return redirect('book')
          ->withErrors($validator)
           ->withInput();
         }

     {
        $book= new Submitorder();
        $book->name=$request->post('name');
        $book->phone_number=$request->post('phone_number');
        $book->email=$request->post('email');
        $book->address=$request->post('address');
        $book-> save();
        return back()->with("ThankYou :) For Book");

      }
}
}
