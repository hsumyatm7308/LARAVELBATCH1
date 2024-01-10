<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    //   2. Storage Folder (storage / app/customfolder)
                // $request->image->store('path/')

                 // use Illuminate\Support\Facades\Storage 
                 // $storage:;disk('local').put($file,'content','optional')


    // $request->image->storeAs($file,$imagename,optional drive)

        $product = new Product();
        $product->name = $request['name'];
        $product->price = $request['price'];

        $file = $request->file('image');

        if($file){
           $fname = $file->getClientOriginalName();

           $imagenewname = date('ymdHis').$fname;

           dd($imagenewname);
        }


        $product->save();


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

        Product::findOrFail($id)->update([
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $request['image'],
        ]);

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
