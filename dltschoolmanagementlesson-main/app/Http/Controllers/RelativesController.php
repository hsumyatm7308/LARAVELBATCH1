<?php

namespace App\Http\Controllers;

use App\Models\Relative;
use App\Models\Status;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class RelativesController extends Controller
{
    public function index()
    {
        $data['relatives'] = Relative::all();
        $data['statuses'] = Status::whereIn('id',[3,4])->pluck('name','id')->prepend('Choose status','');
        return view('relatives.index',$data);
    }




    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50|unique:relatives,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $relative = new Relative();
        $relative->name = $request['name'];
        $relative->slug = Str::slug($request['name']);
        $relative->status_id = $request['status_id'];
        $relative->user_id = $user_id;

        $relative->save();

        session()->flash('success','New Relative Created');
        return redirect(route('relatives.index'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name' => ['required','max:50','unique:relatives,name,'.$id],
            'status_id'=>['required','in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $relative = Relative::findOrFail($id);
        $relative->name = $request['name'];
        $relative->slug = Str::slug($request['name']);
        $relative->status_id = $request['status_id'];
        $relative->user_id = $user_id;

        $relative->save();

        session()->flash('success','Update Successful');
        return redirect(route('relatives.index'));
    }


    public function destroy(string $id)
    {
        $relative = Relative::findOrFail($id);
        $relative->delete();

        session()->flash('info','Delete Successful');
        return redirect()->back();
    }


    public function typestatus(Request $request){
        $relative = Relative::findOrFail($request['id']);
        $relative->status_id = $request['status_id'];
        $relative->save();

        return response()->json(["success"=>"Status Change Successfully."]);
    }
}
