<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CountriesController extends Controller
{
    public function index()
    {
        // http://localhost:8000/countries?filtername=mm
        // dd(request('filtername'));
        
        $countries = Country::where(function($query){
            if($getname = request('filtername')){
                $query->where('name',"LIKE",'%'.$getname.'%');
            }
        })->get();
        // dd($countries);

        return view('countries.index', compact('countries'));
    }


    public function create()
    {
        return view('countries.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:countries,name',
        ]);

        $user=Auth::user();
        $user_id = $user->id;

        $country = new Country();
        $country->name = $request['name'];
        $country->slug = Str::slug($request['name']);
        $country->user_id = $user_id;

        $country->save();
        return redirect(route('countries.index'));

    }


    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'name' => 'required|unique:countries,name,'.$id
        ]);

        $user=Auth::user();
        $user_id = $user->id;

        $country=Country::findOrFail($id);
        $country->name = $request['name'];
        $country->slug = Str::slug($request['name']);
        $country->user_id = $user_id;

        $country->save();

        session()->flash('success','Update Successfully');
        return redirect(route('countries.index'));
    }

    public function destroy(string $id)
    {
        $country = Country::findOrFail($id);
        $country->delete();

        session()->flash('info','Delete Successfully');
        return redirect()->back();
    }
}
