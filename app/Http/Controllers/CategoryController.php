<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('Admin.Pages.Category.create');
    }    

    public function store(Request $request){
        $c=new Category();
        $c->name=$request->name;
        $c->save();
        return redirect()->back()->with('success','You have successfully created a category');
    }

    public function index(){
        $categories=Category::all();
        return view('Admin.Pages.Category.index')->with(['categories'=>$categories]);
    }

    public function edit($id){
        $category=Category::find($id)->firstOrFail();
        return view('Admin.Pages.Category.edit')->with(['category'=>$category]);
    }

    public function update(Request $request,$id){
        $c=Category::find($id)->firstOrFail();
        $c->name=$request->name;
        $c->save();
        return redirect()->back()->with('success','You have successfully updated the category');
    }

    public function delete($id){
        $c=Category::find($id)->firstOrFail();
        $c->delete();
        return redirect()->back()->with('success','You have successfully deleted the category');
    }
}
