<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::check();
            if($this->user==false){
                return redirect('/login');
            }
            else{
                $this->user=Auth::user();
            if($this->user->role ==1){
                return $next($request);
            }
            else{
                return redirect('/login');
            }
            }
        });
    }
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
