<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;


class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // return "I am index page";
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // return $request->all();

        // labelname => $request['name from form ']

        // Country::create([
        //     'name'=>$request['name'],
        //     'capital'=>$request['capital'],
        //     'content'=>$request['content'],
        //     'currency'=>$request['currency'],
        //     'userid'=>$request['userid'],

        // ]);


        $country = new Country;
        $country->name = $request['name'];
        $country->capital = $request['capital'];
        $country->currency = $request['currency'];
        $country->content = $request['content'];
        $country->userid = $request['userid'];
        $country->save();





        return redirect(route('countries.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $countries = Country::findOrFail($id);
        return view('countries.show', ['country' => $countries]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $country = Country::findOrFail($id);
        return view('countries.edit')->with("country", $country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        Country::findOrFail($id)->update([
            'name' => $request['name'],
            'capital' => $request['capital'],
            'content' => $request['content'],
            'currency' => $request['currency'],
            'userid' => $request['userid'],
        ]);

        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $country = Country::findOrFail($id);
        $country->delete();
        // return redirect(route('countries.index'));
        return redirect()->route('countries.index')->back();

        // return redirect()->back();
    }
}