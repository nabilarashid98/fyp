<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;

class UserController extends Controller
{
    //
    public function register(){
       
       return view('register'); 
       //ke page view for register
    }

     public function store(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $state = $request->input('state');

        //username (yellow) = table user usernmae=variable yg ada dlm public function
        $userexist = User::where('username',$username)->orWhere('email',$email)->first();
        
        //if userexist not equal null : data exist, so automatically that message appear
        if($userexist){
            \Session::flash('flash_message_delete', 'Username / Password / Nickname / Email Already Exist');

   return Redirect::route('registeruser');
        }
        //if userexist=null 
        //CREATE
        else {

            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->username = $username;
            $user->password = $password;
            $user->state = $state;
            $user->role = 'user';

            $user->save();
            
            //go to page main which is mainpage
            \Session::flash('flash_message', 'successfully added.');
            //main : that's mean it go to login page
            return Redirect::route('main');
        }


    }

    // public function get_image($name) {

    //     $path = storage_path($name);

    //     $mime = \File::mimeType($path);
    
    //     header('Content-type: ' . $mime);
    
    //     return readfile($path);
    
    // }
    


}
