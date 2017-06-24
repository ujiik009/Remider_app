<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RemiderType;
class RemiderTypeController extends Controller
{
    function showNewRemidertype(){
        $types = RemiderType::get();
        return view("NewRemiderType",['types'=>$types]);

    }

      function addRemiderType(Request $request){
        $type = new RemiderType();
        $type->typeName = $request->name;
        $type->save();
        return back();

    }
}
