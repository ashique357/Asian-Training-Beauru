<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManager;
use Image;
use App\Http\Requests\Course as ReqCourse;
use App\Course;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::check();
            if($this->user==false){
                return redirect('/');
            }
            else{
                $this->user=Auth::user();
            if($this->user->role ==1){
                return $next($request);
            }
            else{
                return redirect('/');
            }
            }
        });
    }

    public function index(){
        $courses=Course::all();
        return view('Admin.Pages.Courses.index')->with(['courses'=>$courses]);
    }
    public function create(){
        return view('Admin.Pages.Courses.create');
    }

    public function store(ReqCourse $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $c=new Course();
        $c->course_title=$request->course_title;
        $c->landing_id=1;
        $c->active=0;
        if($request->hasFile('course_image')){
            $img=$request->file('course_image');
            $title= time().'.'.$img->getClientOriginalExtension();
            $filePath=public_path('/uploads/images/');
            $resize=Image::make($img);
            $resize->resize(158.66,175)->save($filePath.'/'.$title);
            $c->course_image=$resize->basename;
        }
        else{
            $c->course_url=$request->course_url;
        }
        $c->save();
        return redirect()->back()->with('success', 'You have successfully add courses');
    }

    public function edit($id){
        $course=Course::find($id);
        return view('Admin.Pages.Courses.edit')->with(['course'=>$course]);
    }

    public function update(ReqCourse $request,$id){
        $c=Course::find($id);
        $c->course_title=$request->course_title;
        $c->landing_id=1;
        $c->active=0;
        if($request->hasFile('course_image')){
            $img=$request->file('course_image');
            $title= time().'.'.$img->getClientOriginalExtension();
            $filePath=public_path('/uploads/images/');
            $resize=Image::make($img);
            $resize->resize(158.66,175)->save($filePath.'/'.$title);
            $c->course_image=$resize->basename;
        }
        else{
            $c->course_url=$request->course_url;
        }
        $c->save();
        return redirect()->back()->with('success', 'You have successfully updated the courses');
    }

    public function delete($id){
        Course::where('id',$id)->delete();
        return redirect()->back()->with('success', 'You have successfully deleted the courses');
    }
}
