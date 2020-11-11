<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Center;

class CenterController extends Controller
{
    //

    public function index(){

    	$center = Center::all();
    	$i = 1;

    	return view('center/list', compact('center','i'));
    }

    public function search(Request $request){

    	$state = $request->input('state');

    	if ($state =='all') {
    		$center = Center::all();
         } else{
         	$center = Center::where('state',$state)->get();

         }
         $i = 1;
         return view('center/list',compact('center','i'));
    }
}
