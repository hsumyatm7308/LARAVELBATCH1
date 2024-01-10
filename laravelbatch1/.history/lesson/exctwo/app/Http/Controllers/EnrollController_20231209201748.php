<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Status;
class EnrollController extends Controller
{
  
    
    public function index()
    {
        $enroll = Enroll::all();
        return view('enroll.index',compact('enroll'));
    }

  
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('enroll.create',compact('statuses'));
    }

   
    public function store(Request $request)
    {
        $this -> validate($request,[
            'image' => 'image|mimes:jpg,jpeg,png|max:10024',
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $enroll = new Enroll();

        $enroll -> name = $request['name'];   
        $enroll -> slug = Str::slug($request['name']);    
        $enroll -> status_id = $request['status_id'];
        $enroll -> user_id = $user_id;

         //Single Image Upload 
         if(file_exists($request['image'])){

            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$enroll['id'].$fname;
            $file -> move(public_path('assets/img/enrolls/'),$imagenewname);

            $filepath = "assets/img/enroll/".$imagenewname;
            $enroll->image = $filepath;
        }
        
        $enroll -> save();
        return redirect(route('enroll.index'));
    }

    
    public function show(string $id)
    {
        $enrol = enrol::findOrFail($id);
        return view('enroll.show',['enrol'=>$enrol]);
    }
  
    public function edit(string $id)
    {
        $Enroll = Enroll::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('enroll.edit')->with('Enroll',$Enroll)->with('statuses',$statuses);
    }

   
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            'name' => ['required','max:50','unique:enroll,name,'.$id],
            'image' => ['image','mimes:jpg,jpeg,png','max:10024'],
            'status_id' => ['required','in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $Enroll = Enroll::findOrFail($id);

        $Enroll -> name = $request['name'];   
        $Enroll -> slug = Str::slug($request['name']);    
        $Enroll -> status_id = $request['status_id'];
        $Enroll -> user_id = $user_id;

        // Remove old Image 
        if($request->hasFile('image')){
            $path = $Enroll -> image;
            if(File::exists($path)){
                File::delete($path);
            }
        }


         //Single Image Update 
         if($request -> hasFile('image')){

            $file = $request -> file('image');
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$Enroll['id'].$fname;
            $file -> move(public_path('assets/img/enroll/'),$imagenewname);

            $filepath = "assets/img/enroll/".$imagenewname;
            $Enroll->image = $filepath;
        }
        
        $Enroll -> save();
        return redirect(route('enroll.index'));
    }


 
    public function destroy(string $id)
    {

        

        $Enroll = Enroll::findOrFail($id);
        //Remove Old Imge 
        $path = $Enroll -> image;
            if(File::exists($path)){
                File::delete($path);
            }

        $Enroll -> delete();
        return redirect()->back();
    }
}
