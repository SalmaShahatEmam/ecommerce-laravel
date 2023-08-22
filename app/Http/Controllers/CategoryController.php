<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories= category::all();
        return view('frontend.categories.index' , ['categories' =>$categories ]);
    }

    public function search($name){

        return $name;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' =>'required|unique:categories',
            'description' =>'required'
        ]);

        category::create($request->post());

        return redirect()->route('categories')->with('success','Category has been created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        return view('layouts.editCategory' , ['category'=>category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        return view('layouts.categories' , ['categories' => category::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        category::where('id' , $id)->delete();
        return redirect()->route('categories')->with('success','Category has been deleted successfully.');
    }
}
