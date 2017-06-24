<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
    	return view('test');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'username' => 'required',
    		'email' => 'required|email'
    	]);
    	var_dump($request->input('username'));
    	var_dump($request->input('email'));

    }
}
