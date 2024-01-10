<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentsController extends Controller
{
    public function index(){
        return view('students/index');
    }
}
