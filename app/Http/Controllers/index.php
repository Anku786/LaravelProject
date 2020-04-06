<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function submit(Request $req){
    	$req->validate([
    		"email"=>"required",
    		"password"=>"min:8"
    	]);
    }
}
