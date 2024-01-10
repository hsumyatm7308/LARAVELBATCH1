<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class StatusesController extends Controller
{
   
    public function index()
    {
        $statuses = Status::all();
        return view('statuses.index',compact('statuses'));
    }

    
    public function create()
    {
        return view('statuses.create');
    }

    
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|unique:statuses,name'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $status = new Status();

        $status -> name = $request['name'];   
        $status -> slug = Str::slug($request['name']);    
        $status -> user_id = $user_id;
        
        $status -> save();
        return redirect(route('statuses.index'));
    }

  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $this -> validate($request,[
            'editname' => 'required|unique:statuses,name,'.$id
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $status = Status::findOrFail($id);

        $status -> name = $request['name'];   
        $status -> slug = Str::slug($request['name']);    
        $status -> user_id = $user_id;
        
        $status -> save();
        return redirect(route('statuses.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = Status::findOrFail($id);
        $status -> delete();
        return redirect()->back();
    }
}
