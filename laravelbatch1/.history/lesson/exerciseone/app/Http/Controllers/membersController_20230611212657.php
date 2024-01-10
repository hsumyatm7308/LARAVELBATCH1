<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersController extends Controller
{
    public function index(){
        $header = "this is my first template with data pasiing";

        $student =[
            "honey Nway Oo",
            "Mandalay",
            "0976899"
        ];

        return view('layouts/index',compact($header));
    }
}
