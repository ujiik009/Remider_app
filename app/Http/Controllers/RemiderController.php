<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RemiderController extends Controller
{
    function home(){
    	$remiders = DB::table('remider_table')->orderBy('id','desc')->where('isFinished',0)->get();
    	return view('home' ,['remiders' => $remiders]);
    }

    function addRemider(Request $request){
        $body = $request->remider;     
        DB::table('remider_table')->insert(
            [
                'body' => $body,
                'isFinished' => 0,
                'createUserId' => 1
            ]
        );
        return back();
    }

    function deleteRemider(Request $request){
        DB::table('remider_table')->where('id', $request->id)->update(['isFinished' => 1]);
        return back();
    }
    
}

