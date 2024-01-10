<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data[] = [
          
            'name'=>'Aung Ko Ko';
        ]

        return view('employees/index');
    }
}
