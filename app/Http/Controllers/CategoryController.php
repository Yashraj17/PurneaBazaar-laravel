<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = Category::all();
        return view('admin.manageCategory',$data);
    }


    public function create()
    {
        $data['category'] = Category::where("parent_id","0")->get();
        return view("admin.insertCategory",$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_title'=>"required",
            'parent_id'=>"required",
        ]);
        $category = new Category();
        $category->category = $request->cat_title;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route("category.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category  $category)
    {
        $category = Category::find($category->id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
