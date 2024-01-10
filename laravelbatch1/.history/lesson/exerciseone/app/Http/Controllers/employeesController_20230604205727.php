<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data['employeesdata'] = [
          
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmailcom',
            'phone'=>'09273838'
        ];

        // dd($data);

        return view('employees/index',$data);
    }

    public function passingdataone(){
        $fullname = ;
     return view('employees/dataone');
    }
}
