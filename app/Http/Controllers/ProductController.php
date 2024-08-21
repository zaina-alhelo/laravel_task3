<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        //  $product = Product::with('product_category')->get();

        
        $product=Product::all();
    return view("products.index",['products'=> $product] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $product= Product::all();
    $categories = Category::all();

        return view('products.create', ['product' => $product,'categories'=> $categories] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           if($request->has('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path='uploads/product/';
            $file->move($path,$filename);
        }
    
        Product::create([
            'product_name'=>$request->name,
            'product_description'=>$request->description,
            'product_price'=>$request->Price,
            'category_id'=>$request->Price,
            'image'=>$path.$filename,

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
        
        if($request->has('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path='uploads/product/';
            $file->move($path,$filename);
            if(File::exists($product->image)){
                File::delete($product->image);
            }
        }
                $product->update([
            'product_name'=> $request->name,
            'product_description'=> $request->description,
            'product_price'=> $request->price,
                        'image'=>$path.$filename,

        ]);
        // return to_route('movies.index');
        return redirect()->route('products.index')->with('success', 'Movie updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
            if(File::exists($product->image)){
                File::delete($product->image);
            }
               $product->delete();
        return to_route('products.index');
    }
}
