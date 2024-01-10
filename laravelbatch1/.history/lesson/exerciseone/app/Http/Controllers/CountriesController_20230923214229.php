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

        return "I am index page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

     return  view('countries.create');
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
        //     'currency'=>$request['currency'],
        //     'user_id'=>$request['user_id'],

        // ]);


        $country = new Country;

        return redirect(route('countries.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
