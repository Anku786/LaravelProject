<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function submit1(Request $req){
    	$req->validate([
    		"name"=>"required",
    		"email"=>"required",
    		"mobile"=>"min:10",
    		"password"=>"min:8"
    	]);
    }
}
