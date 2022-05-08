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
    
      // $validator = Validator::make(
      //   [
      //     'name'=> $request-> post ('name'),
      //     'number'=> $request-> post ('phonenumber'),
      //     'email'=> $request-> post ('email'),
          

      //   ],

      //   [
      //     'name'=> 'required|max:255',
      //     'phone number'=> 'required|max:10|',
      //     'email'=> 'required|max:255|email',
          

      //   ]
      //   );
      //   if ($validator->fails()){
      //     return redirect('book')
      //     ->withErrors($validator)
      //     ->withInput();


     {   
        $book= new Submitorder();
        $book->name=$request->post('name');
        $book->phone_number=$request->post('phone_number');
        $book->email=$request->post('email');
        $book-> save();
        return redirect('book')->withSuccess("ThankYou :) For Book");
        
      }
}
