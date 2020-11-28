<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Feedback;



class FeedbackController extends Controller
{
    //
    public function create(){
      return view('feedback');
    }

    public function store(Request $request){
      $this-validate($request, [
        'name' => 'required',
        'email' => 'required|email'
        'phonenumber' => 'required'
        'message' => 'required'
      ]);
    }

      Mail::send('emails')

}


