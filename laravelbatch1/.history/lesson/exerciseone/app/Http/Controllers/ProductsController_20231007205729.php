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
        //

        // return $request->all();

        // labelname => $request['name from form ']

        Product::create([
            'name'=>$request['name'],
            'price'=>$request['price'],
            'image'=>$request['image']
           

        ]);


        // $product = new Product;
        // $product->name = $request['name'];
        // $product->price = $request['price'];
        // $product->save();





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
