<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    //
     public function index(){

    	$school = School::all();
    	$i = 1;

    	return view('school/list', compact('school','i'));
    }

     public function search(Request $request){

    	$state = $request->input('state');

    	if ($state =='all') {
    		$school = School::all();
         } else{
         	$school = School::where('state',$state)->get();

         }
         $i = 1;
         return view('school/list',compact('school','i'));
    }
}
