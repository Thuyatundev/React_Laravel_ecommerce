<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Category::latest()->paginate(5);
        // dd($cat);

        return view('admin.category.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required'
        ]);

        Category::create([
            'slug'=> Str::slug($request->name).uniqid(),
            'name'=> $request->name
        ]);

        return redirect()->route('category.index')->with('success','Category Created Successfully...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat = Category::where('slug',$id)->first();
        return view('admin.category.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name'=> 'required'
        ]);

        Category::where('slug',$id)->update([
            'slug'=> Str::slug($request->name).uniqid(),
            'name'=> $request->name
        ]);

        return redirect()->route('category.index')->with('success','Category updated Successfully...');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Category::where('slug',$id);
        $cat->delete();
        return redirect()->route('category.index')->with('success','Category Deleted Successfully');
    }
}
