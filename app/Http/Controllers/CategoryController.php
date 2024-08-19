<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
              $category=Category::all();
    return view("categories.index",['categories'=> $category] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { $category= category::all();

        return view('categories.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          category::create([
            'category_name'=>$request->name,
            'category_description'=>$request->description,
        
        ]);
return to_route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show', ['category'=> $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
                return view('categories.edit', ['category'=> $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
              $category ->update([
            'category_name'=> $request->name,
            'category_description'=> $request->description,
        ]);
        return redirect()->route('categories.index')->with('success', 'Movie updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
             $category->delete();
        return to_route('categories.index');
    }
}
