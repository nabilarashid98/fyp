<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Feedback;
use Redirect;



class FeedbackController extends Controller
{
    //
    public function create(){
      return view('feedback');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $description = $request->input('description');

        $data = new Feedback;
        $data->name = $name;
        $data->email = $email;
        $data->description = $description;

        $data->save();
        \Session::flash('flash_message', 'thank you for your feedback.');
        return Redirect::route('mainpage');
    }

     

}


