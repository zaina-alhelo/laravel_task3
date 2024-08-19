<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $product=Product::all();
    return view("products.index",['products'=> $product] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $product= Product::all();

        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        Product::create([
            'product_name'=>$request->name,
            'product_description'=>$request->description,
            'product_price'=>$request->Price
        ]);
return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
              return view('products.show', ['product'=> $product]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product'=> $product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
                $product->update([
            'product_name'=> $request->name,
            'product_description'=> $request->description,
            'product_price'=> $request->price,
        ]);
        // return to_route('movies.index');
        return redirect()->route('products.index')->with('success', 'Movie updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
               $product->delete();
        return to_route('products.index');
    }
}
