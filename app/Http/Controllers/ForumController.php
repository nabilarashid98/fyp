<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    //
    public function addforum(){
    	return view ('forum/addforum');
    }

     public function listforum(){
    	return view ('forum/listforum');
    }

    public function detailforum(){
    	return view ('forum/detailforum');
    }
}

