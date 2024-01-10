<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data[] = [
          
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmailcom',
            'phone'=>'09273838'
        ];

        // dd($data);

        return view('employees/index');
    }
}
