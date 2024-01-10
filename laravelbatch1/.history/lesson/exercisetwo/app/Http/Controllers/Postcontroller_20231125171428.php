<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RolesController extends Controller
{
  
    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

  
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('roles.create',compact('statuses'));
    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|unique:roles,name',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024',
            'status_id'=>'required:in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $role = new Role();

        $role -> name = $request['name'];   
        $role -> slug = Str::slug($request['name']);    
        $role -> user_id = $user_id;
        
        $role -> save();
        return redirect(route('roles.index'));
    }

    
    public function show(string $id)
    {
        
    }
  
    public function edit(string $id)
    {
    
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => 'required|unique:roles,name,'.$id
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $role = Role::findOrFail($id);

        $role -> name = $request['name'];   
        $role -> slug = Str::slug($request['name']);    
        $role -> user_id = $user_id;
        
        $role -> save();
        return redirect(route('statuses.index'));
    }


 
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role -> delete();
        return redirect()->back();
    }
}
