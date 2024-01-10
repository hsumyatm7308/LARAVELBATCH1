<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Gender;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index', compact('genders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'regnumber' => 'required|unique:genders,regnumber',
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $gender = new Gender();
        $gender->regnumber = $request['regnumber'];
        $gender->gender = $request['gender'];
        $gender->slug = Str::slug($request['regnumber']);
        $gender->remark = $request['remark'];

        $gender->user_id = $user_id;

        $gender->save();
        return redirect(route('genders.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gender = Gender::findOrFail($id);
        return view('genders.show')->with('gender', $gender);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gender = Gender::findOrFail($id);
        return view('genders.edit', ['gender' => $gender]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'regnumber' => 'required|unique:genders,regnumber,' . $id,
            'remark' => 'max:1000'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $gender = Gender::findOrFail($id);
        $gender->regnumber = $request['regnumber'];
        $gender->gender = $request['gender'];
        $gender->slug = Str::slug($request['regnumber']);
        $gender->user_id = $user_id;

        $gender->save();
        return redirect(route('genders.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();
        return redirect()->back();
    }
}
