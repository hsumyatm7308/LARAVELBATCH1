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
        $fullname = "Honey Nway Oo";
        $city = "Mandalay";

     return view('employees/dataone',["fullname"=>$fullname,"city"=>$city]);
    }


    public function passingdatatwo(){

        $greeting = "Have a Nice day";

        $students = [
          "Honey Nway Oo",
          "Mandalay",
          "0111111"
        ];

        return view('employees/datatwo',[ "greeting"=>$greeting, "students"=>$students]);
    }

    public function passingdatathree(){
        $greeting = "Have a nice day";
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "0111111"
          ];

        return view('employees/datathree')->with("greeting",$greeting)->with("students",$students);
    }

    public function passingdatafour(){
        $greeting = "Have a nice day";
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "0111111"
          ];

        //   return view('employees/datafour',compact("greeting","students"));
        // return view('employees/datafour',compact("greeting",compact("students")));
        // return view('employees/datafour')->with(compact("greeting","students"));
        return view('employees/datafour')->with(compact("greeting"))->with(compact("students"));
    }


    public function show(){
        $data['employeesdata'] = [
          
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmailcom',
            'phone'=>'09273838'
        ];

        return view('employees/show',$data);

    }


    public function edit(){
        $data['employeesdata'] = [
          
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmailcom',
            'phone'=>'09273838'
        ];

        return view('employees/edit',compact("data"));

    }


    public function update(){
        $data['employeesdata'] = [
          
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmailcom',
            'phone'=>'09273838'
        ];

        return view('employees/update',compact("data"));

    }


}
