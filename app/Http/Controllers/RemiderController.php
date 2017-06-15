<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\RemiderTable;
use App\RemiderType;
class RemiderController extends Controller
{
    function home(){
        $remiders = RemiderTable::orderBy('id','desc')
            ->where('isFinished',0)
            ->get();
        $types = RemiderType::get();
    	return view('home' ,['remiders' => $remiders,'types'=> $types]);
    }

    function showNewRemider(){
        $types = RemiderType::get();
        return view("NewRemiderType",['types'=>$types]);

    }


    function addRemiderType(Request $request){
        $type = new RemiderType();
        $type->typeName = $request->name;
        $type->save();
        return back();

    }

    function addRemider(Request $request){
       
        $remider = new RemiderTable();
        $remider->body = $request->remider;
        $remider->isFinished = 0;
        $remider->createUserId = 1;
        $remider->remidertype = $request->type;
        $remider->save();
        return back();
    }

    function deleteRemider(Request $request){
        
       
        $Remider = RemiderTable::find($request->id);
        $Remider->isFinished = 1;
        $Remider->save();
        // or delete $Remider->delete();
        //$Remider->delete();
        return back();
    }
}

