<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Country;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries.index')->with('countries',$countries);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'regnumber'=>'required|unique:countries,regnumber',
            'remark'=>'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user -> id;

        $country = new Country();
        $country -> regnumber = $request['regnumber'];
        $country -> country = $request['country'];
        $country -> slug = Str::slug($request['regnumber']);
        $country -> remark = $request['remark'];
        $country -> user_id = $user_id;

        $country -> save();
        return redirect(route('countries.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $country = Country::findOrFail($id);
        return view('countries.show',['country'=>$country]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = Country::findOrFail($id);
        return view('countries.edit')->with('country',$country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'regnumber' => 'required|unique:countries,regnumber,'.$id,
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $country = Country::findOrFail($id);
      
        $country -> country = $request['country'];
        $country -> regnumber = $request['regnumber'];
       
        $country -> slug = Str::slug($request['regnumber']);
        $country -> remark = $request['remark'];
        $country -> user_id = $user_id;
        
        $country -> save();
        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::findOrFail($id);
        $country -> delete();
        return redirect()->back();
    }
}
