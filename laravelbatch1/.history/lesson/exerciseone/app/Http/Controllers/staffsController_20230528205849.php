<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffsController extends Controller
{
    public function home(){
        return view('staffs/home');
    }

    public function party(){
        return view('staffs/party');
    }

    public function partytotal($total){
        return view('staffs/partytotal',['total'=>$total]);
    }
}
