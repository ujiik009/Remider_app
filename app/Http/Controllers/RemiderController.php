<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\RemiderTable;
class RemiderController extends Controller
{
    function home(){
    	//$remiders = DB::table('remider_table')->orderBy('id','desc')->where('isFinished',0)->get();
        $remiders = RemiderTable::orderBy('id','desc')
            ->where('isFinished',0)
            ->get();
    	return view('home' ,['remiders' => $remiders]);
    }

    function addRemider(Request $request){
        echo "<pre>";
        $remider = new RemiderTable();
        $remider->body = $request->remider;
        $remider->isFinished = 0;
        $remider->createUserId = 1; 
        $remider->save();
        return back();
    }

    function deleteRemider(Request $request){
       
        $Remider = RemiderTable::find($request->id);
        $Remider->isFinished = 1;
        $Remider->save();
        return back();
    }
    
}

