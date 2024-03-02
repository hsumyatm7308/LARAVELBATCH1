<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GendersController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index', compact('genders'));
    }


    public function create()
    {
        return view('genders.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:genders,name',
        ]);

        $user=Auth::user();
        $user_id = $user->id;

        $country = new Gender();
        $country->name = $request['name'];
        $country->slug = Str::slug($request['name']);
        $country->user_id = $user_id;

        $country->save();
        return redirect(route('genders.index'));

    }


    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'name' => 'required|unique:genders,name,'.$id
        ]);

        $user=Auth::user();
        $user_id = $user->id;

        $country=Gender::findOrFail($id);
        $country->name = $request['name'];
        $country->slug = Str::slug($request['name']);
        $country->user_id = $user_id;

        $country->save();

        session()->flash('success','Update Successfully');
        return redirect(route('genders.index'));
    }

    public function destroy(string $id)
    {
        $country = Gender::findOrFail($id);
        $country->delete();

        session()->flash('info','Delete Successfully');
        return redirect()->back();
    }

}
