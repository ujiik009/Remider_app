<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RemiderType;
//use Illuminate\Contracts\Validation\Validator;

class RemiderTypeController extends Controller
{
    function showNewRemidertype(){
        $types = RemiderType::get();
        return view("NewRemiderType",['types'=>$types]);

    }

      function addRemiderType(Request $request){
        // chechk duplicate
        $this->validate($request , [
            'name' => 'required|unique:remidertype,typeName'
        ]);

        $typeName = $request->name;
        $type = new RemiderType();
        $type->typeName = $typeName;
        $type->save();
        return back();

    }
}
