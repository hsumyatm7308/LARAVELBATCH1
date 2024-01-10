<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // return "I am index page";
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //    1. Public Folder (public/customfolder/)
        // $request->image->move('customfolder',$imagename);
        // $request->image->move(public_path('path'),$imagename);

        //   2. Storage Folder  / Local Driver (storage / app/customfolder)   
        // $request->image->store('path/')

        // php artisan stroage:link 

        // use Illuminate\Support\Facades\Storage 
        // $storage:;disk('local').put($file,'content','optional')


        // $request->image->storeAs($customfolder,$imagename,optional drive)

        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];

        $file = $request->file('image');

        // if ($file) {
        //     $fname = $file->getClientOriginalName();

        //     // $imagenewname = date('ymdHis') . $fname;
        //     // $imagenewname = time() . $fname;
        //     $imagenewname = uniqid().$fname;


        //     // dd($imagenewname);
        //     $file->move('images',$imagenewname);
        //     $product->image = $imagenewname;


        // }


        // if ($file) {
        //     $fname = $file->getClientOriginalName();

        //     // $imagenewname = date('ymdHis') . $fname;
        //     // $imagenewname = time() . $fname;
        //     $imagenewname = uniqid() . $fname;


        //     // dd($imagenewname);
        //     $filerul = $file->move(public_path('images'), $imagenewname);
        //     $product->image = $filerul;


        // }


        // if($request->hasFile('image')){
        //     $fnameext = $file->getClientOriginalExtension(); //jpg 
        //     $imagenewname = uniqid().'.'.$fnameext;

        //     // dd($imagenewname);

        //     $file->storeAs('images',$imagenewname);
        //     $product->image = $imagenewname;
        // }



        // if($request->hasFile('image')){
        //     $fnameext = $file->extension(); //jpg 
        //     $imagenewname = uniqid().'.'.$fnameext;

        //     // dd($imagenewname);

        //     $file->storeAs('public/images',$imagenewname);
        //     $product->image = $imagenewname;
        // }


        // if($request->hasFile('image')){
        //     // $fileutl = $file->store();
        //     $fileutl = $file->store('images');

        //     $product->image = $fileutl;
        // }


        // if($request->hasFile('image')){
        //     $fnameext = $file->extension();
        //     $imagename = uniqid().".".$fnameext;
        //     Storage::disk("local")->put('images/'.$imagename,$file->get());

        //     $product->image = $imagename;
        // }



        // if($request->hasFile('image')){
        //     $fnameext = $file->extension();
        //     $imagename = uniqid().".".$fnameext;
        //     Storage::disk("local")->put('images/'.$imagename,$file->get(),'public');

        //     $fileurl = 'public/app/images/'.$imagename;
        //     $product->image = $fileurl;
        // }


        $product->save();
        return redirect(route('products.index'));




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $products = Product::findOrFail($id);
        return view('products.show', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $products = Product::findOrFail($id);
        return view('products.edit')->with("products", $products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

       
        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];


        // if ($request->hasFile('image')) {
        //             $file = $request->file('image');

        //     $fname = $file->getClientOriginalName();

        //     // $imagenewname = date('ymdHis') . $fname;
        //     // $imagenewname = time() . $fname;
        //     $imagenewname = uniqid().$fname;


        //     // dd($imagenewname);
        //     $file->move('images',$imagenewname);
        //     $product->image = $imagenewname;


        // }


        if ($request->hasFile('image')) {
            $fname = $file->getClientOriginalName();

            // $imagenewname = date('ymdHis') . $fname;
            // $imagenewname = time() . $fname;
            $imagenewname = uniqid() . $fname;


            // dd($imagenewname);
            $filerul = $file->move(public_path('public/images'), $imagenewname);
            $product->image = $filerul;


        }


        // if($request->hasFile('image')){
        //     $fnameext = $file->getClientOriginalExtension(); //jpg 
        //     $imagenewname = uniqid().'.'.$fnameext;

        //     // dd($imagenewname);

        //     $file->storeAs('images',$imagenewname);
        //     $product->image = $imagenewname;
        // }



        // if($request->hasFile('image')){
        //     $fnameext = $file->extension(); //jpg 
        //     $imagenewname = uniqid().'.'.$fnameext;

        //     // dd($imagenewname);

        //     $file->storeAs('public/images',$imagenewname);
        //     $product->image = $imagenewname;
        // }


        // if($request->hasFile('image')){
        //     // $fileutl = $file->store();
        //     $fileutl = $file->store('images');

        //     $product->image = $fileutl;
        // }


        // if($request->hasFile('image')){
        //     $fnameext = $file->extension();
        //     $imagename = uniqid().".".$fnameext;
        //     Storage::disk("local")->put('images/'.$imagename,$file->get());

        //     $product->image = $imagename;
        // }



        // if($request->hasFile('image')){
        //     $fnameext = $file->extension();
        //     $imagename = uniqid().".".$fnameext;
        //     Storage::disk("local")->put('images/'.$imagename,$file->get(),'public');

        //     $fileurl = 'public/app/images/'.$imagename;
        //     $product->image = $fileurl;
        // }


        $product->save();
        return redirect(route('products.index'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect(route('products.index'));
        // return redirect()->route('products.index')->back();

        // return redirect()->back();
    }
}