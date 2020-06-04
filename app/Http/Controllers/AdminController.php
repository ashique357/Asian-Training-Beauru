<?php

namespace App\Http\Controllers;

use App\Http\Requests\Banner;
use App\Http\Requests\TopNav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Landing;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if($this->user->role ==1){
                return $next($request);
            }
            else{
                return redirect('/');
            }
        });
    }

    public function index(){
        return view('Admin.Pages.dashboard');
    }

    public function landing(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['address']="No data";
            $data['email']="No data";
            $data['phone']="No data";
            $data['time']="No data";
            $data['banner_image']="No data";
            $data['banner_title']="No data";
            $data['banner_paragraph']="No data";
            $data['banner_url']="No data";
            $data['course_title']="No data";
            $data['course_url']="No data";
            $data['faculty_title']="No data";
            $data['faculty_paragraph']="No data";
            $data['faculty_url']="No data";
            $data['fb_url']="No data";
            $data['twitt_url']="No data";
            $data['f_para1']="No data";
            $data['f_para2']="No data";
            $data['f_para3']="No data";
            return view('Admin.Pages.landingPage')->with('data',$data);
        }
        else{
            return view('Admin.Pages.landingPage')->with('data',$data);
        }
        
    }

    public function topNav(TopNav $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $l=Landing::where('id',1)->first();
        $l->address=$request->address;
        $l->email=$request->email;
        $l->phone=$request->phone;
        $l->time=$request->time;
        $l->save();
        return response()->json();
    }

    public function banner(Banner $request){
        
    }

}
