<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Chapter;

class ChapterController extends Controller
{
    use ImageTrait,RichTextTrait;

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
        })->except(['IndexUser','ShowUser']);
    }

    public function index(){
        $chapters=Chapter::latest()->paginate(10);
        return view('Admin.Pages.Chapter.index')->with('chapters',$chapters);
    }

    public function create(){
        $countries=DB::table('countries')->get();
        return view('Admin.Pages.Chapter.create')->with('countries',$countries);
    }

    public function store(Request $request){
        $chapter=new Chapter();
        $chapter->name=$request->name;
        $chapter->country=$request->country;
        $chapter->year=$request->year;
        $chapter->contact_person=$request->contact_person;
        $chapter->web=$request->web;
        $chapter->contact=$request->contact;
        $chapter->members=$request->members;
        $fieldname='details';
        $details=$this->richText($request,$fieldname);
        $chapter->details=$details;
        $chapter->save();
        return redirect()->back()->with('success', 'You have successfully saved the chapter content');
    }

    public function edit($id){
        $countries=DB::table('countries')->get();
        $chapter=Chapter::where('id',$id)->firstOrFail();
        return view('Admin.Pages.Chapter.edit')->with(['chapter'=>$chapter,'countries'=>$countries]);
    }

    public function update(Request $request,$id){
        $chapter=Chapter::where('id',$id)->firstOrFail();
        $chapter->name=$request->name;
        $chapter->country=$request->country;
        $chapter->year=$request->year;
        $chapter->contact_person=$request->contact_person;
        $chapter->web=$request->web;
        $chapter->contact=$request->contact;
        $chapter->members=$request->members;
        $fieldname='details';
        $details=$this->richText($request,$fieldname);
        $chapter->details=$details;
        $chapter->save();
        return redirect()->back()->with('success', 'You have successfully edited the chapter content');
    }

    public function show($id){
        $chapter=Chapter::findOrFail($id);
        return view('Admin.Pages.Chapter.show')->with('chapter',$chapter);
    }

    public function delete($id){
        $chapter=Chapter::where('id',$id)->firstOrFail();
        $chapter->delete();
        return redirect()->back()->with('success', 'You have successfully deleted the {{$chapter->country}}\'s chapter');        
    }

    public function IndexUser(){
        $chapters=Chapter::all()->sortBy('name');
        return view('User.Pages.chapterIndex')->with('chapters',$chapters);
    }

    public function ShowUser($name){
        $chapter=Chapter::where('name',$name)->firstOrFail();
        return view('User.Pages.chapterShow')->with('chapter',$chapter);
    }
}
