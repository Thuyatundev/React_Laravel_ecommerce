<?php

namespace App\Http\Controllers\Admin;

use COM;
use App\Models\Color;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color = Color::latest()->paginate(5);
        return view('admin.color.index',compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        Color::create([
            'slug'=>Str::slug($request->name).uniqid(),
            'name'=>$request->name
        ]);
        return redirect()->route('color.index')->with('success',"Color Created Successfully");
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
        //
        $color = Color::where('slug',$id)->first();
        return view('admin.color.edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name'=>'required'
        ]);
        $color = Color::where('slug',$id)->first();

        $color->update([
            'slug'=> Str::slug($request->name).uniqid(),
            'name'=> $request->name
        ]);

        return redirect()->route('color.index')->with('success','Color updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $color = Color::where('slug',$id);
        $color->delete($id);
        return redirect()->route('color.index')->with('success','Color Deleted Successfully');
    }
}
