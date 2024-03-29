<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dd($this->method()); // POST PUT
        return true;
    }


    public function rules(): array
    {

        if($this->method() == "POST"){
            return [
                'post_id'=>'required',
                'startdate' => 'required|date',
                'enddate' => 'required|date',
                'tag' => 'required',
                'title' => 'required|max:50',
                'content' => 'required',
                'image'=>'nullable|image|mimes:jpg,jpeg,png|max:1024'
            ];
        }else{
            return [
                'post_id'=>'required',
                'startdate' => 'required|date',
                'enddate' => 'required|date',
                'tag' => 'required',
                'title' => 'required|max:50',
                'content' => 'required',
                'image'=>'nullable|image|mimes:jpg,jpeg,png|max:1024'
            ];
        }

        
    }

    public function attributes(){
        return[
            'post_id'=>'class name',
            'startdate' => 'start date',
            'enddate' => 'end date',
            'tag' => 'authorize person'
        ];
    }


    public function messages(){
        return[
            'post_id.required'=>"class name can't be empty",
            'startdate.required' => "start date can't be empty",
            'enddate.required' => "end date can't be empty",
            'tag.required' => "authorize person must be choose"
        ];
    }



}


// php artisan make:request LeaveRequest 


// edit 
// delete
// search
// filter 