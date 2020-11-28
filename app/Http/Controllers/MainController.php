<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){

      return view ('main/index');
    }

     public function about()
    {
        return view('about');
    }

   public function school()
    {
        return view('school');
    }

     public function mainscreening()
    {
        return view('mainscreening');
    }

     public function applypkk()
    {
        return view('applypkk');
    }

   
   public function financesupport()
    {
        return view('financesupport');
    }
}
