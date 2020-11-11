<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreeningtestController extends Controller
{
    //

    public function index(){

    	return view('screening/list');
    }

    public function post(Request $request){

    	$countyes = 0;
    	$countno = 0;
    	$countmaybe = 0;

    	$one = $request->input('one');
    	$two = $request->input('two');
    	$three = $request->input('three');
    	$four = $request->input('four');
    	$five = $request->input('five');
    	$six = $request->input('six');
    	$seven = $request->input('seven');
    	$eight = $request->input('eight');
    	$nine = $request->input('nine');
        $ten = $request->input('ten');
        $eleven = $request->input('eleven');
        $twelve = $request->input('twelve');
        $thirteen = $request->input('thirteen');
        $fourteen = $request->input('fourteen');
        $fifteen = $request->input('fifteen');
        $sixteen = $request->input('sixteen');
        $seventeen = $request->input('seventeen');
        $eighteen = $request->input('eighteen');
        $nineteen = $request->input('nineteen');
        $twenty = $request->input('twenty');
        $twentyone = $request->input('twentyone');
        $twentytwo = $request->input('twentytwo');

    	   //one
        if($one == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($one == 'NO'){
            $countno = $countno + 1;
        }
        elseif($one == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //two
        if($two == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($two == 'NO'){
            $countno = $countno + 1;
        }
        elseif($two == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //three
         if($three == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($three == 'NO'){
            $countno = $countno + 1;
        }
        elseif($three == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

         //four
         if($four == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($four == 'NO'){
            $countno = $countno + 1;
        }
        elseif($four == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

         //five
         if($five == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($five == 'NO'){
            $countno = $countno + 1;
        }
        elseif($five == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //six
        if($six == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($six == 'NO'){
            $countno = $countno + 1;
        }
        elseif($six == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //seven
        if($seven == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($seven == 'NO'){
            $countno = $countno + 1;
        }
        elseif($seven == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //eight
        if($eight == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($eight == 'NO'){
            $countno = $countno + 1;
        }
        elseif($eight == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //nine
        if($nine == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($nine == 'NO'){
            $countno = $countno + 1;
        }
        elseif($nine == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //ten
        if($ten == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($ten == 'NO'){
            $countno = $countno + 1;
        }
        elseif($ten == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //nine
        if($eleven == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($eleven == 'NO'){
            $countno = $countno + 1;
        }
        elseif($eleven == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //nine
        if($twelve == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($twelve == 'NO'){
            $countno = $countno + 1;
        }
        elseif($twelve == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //thirteen
        if($thirteen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($thirteen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($thirteen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //fourteen
        if($fourteen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($fourteen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($fourteen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //fifteen
        if($fifteen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($fifteen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($fifteen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //sixteen
        if($sixteen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($sixteen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($sixteen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //seventeen
        if($seventeen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($seventeen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($seventeen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //eighteen
        if($eighteen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($eighteen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($eighteen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //ninetten
        if($nineteen == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($nineteen == 'NO'){
            $countno = $countno + 1;
        }
        elseif($nineteen == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //twenty
        if($twenty == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($twenty == 'NO'){
            $countno = $countno + 1;
        }
        elseif($twenty == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //twentyone
        if($twentyone == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($twentyone == 'NO'){
            $countno = $countno + 1;
        }
        elseif($twentyone == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }

        //twenty two
        if($twentytwo == 'YES'){
            $countyes = $countyes + 1;
        }
        elseif($twentytwo == 'NO'){
            $countno = $countno + 1;
        }
        elseif($twentytwo == 'MAYBE'){
            $countmaybe = $countmaybe + 1;
        }
        //condition
        if($countyes >= 25 || $countmaybe >= 25){
            $result = 'your children might have a dyslexia';
        } else {
            $result = 'children dont have a dyslexia';
        }

        return view('screening/result', compact('result'));


    }
}
