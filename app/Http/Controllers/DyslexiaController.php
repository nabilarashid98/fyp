<?php

namespace App\Http\Controllers;
use App\User;
use App\dyslexiainfo;
use Illuminate\Http\Request;

class DyslexiaController extends Controller
{
    //
   public function whatisdyslexia()
    {
        return view('whatisdyslexia');
    }

     public function treatdyslexia()
    {
        return view('treatdyslexia');
    }

     public function mythsdyslexia()
    {
        return view('mythsdyslexia');
    }

     public function methodteachingdyslexia()
    {
        return view('methodteachingdyslexia');
    }


     public function dyslexiasignandsymptoms()
    {
        return view('dyslexiasignandsymptoms');
    }

    public function activitieswithdyslexiakids()
    {
        return view('activitieswithdyslexiakids');
    }

    
}
