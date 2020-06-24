<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;



class MemberController extends Controller
{
    use ImageTrait;
    public function __construct()
    {
        $this->middleware('auth')->except(['search','searchResult']);

    }

    public function index(){
        $countries=DB::table('countries')->get();
        return view('User.Pages.application')->with('countries',$countries);
    }

    public function store(Request $request){
        $m=new Member();
        //individual
        $m->name=$request->name;
        $m->country=$request->country;
        $m->email=$request->email;
        $m->phone=$request->phone;
        $m->address=$request->address;
        $m->desg=$request->desg;
        $m->linkedin=$request->linkedin;
        $m->exp=$request->exp;
        $m->msg=$request->msg;
        $image_field='photo';
        $h=150;
        $w=150;
        $image=$this->imageUpload($request,$image_field,'/member',$h,$w);
        $m->photo=$image;
        //provider
        $m->tp_name=$request->tp_name;
        $m->tp_email=$request->tp_email;
        $m->tp_address=$request->tp_address;
        $m->web=$request->web;
        $m->tp_exp=$request->tp_exp;
        $m->tp_phone=$request->tp_phone;
        $m->con_person=$request->con_person;
        $m->tp_msg=$request->tp_msg;
        //corporate
        $m->org_name=$request->org_name;
        $m->employee=$request->employee;
        $m->org_con_person=$request->org_con_person;
        $m->org_email=$request->org_email;
        $m->org_phone=$request->org_phone;
        $m->org_msg=$request->org_msg;
        
        $m->member_type=$request->member_type;
        $m->approved=0;
        $m->reg_id=mt_rand(1000000, 9999999);
        $m->user_id=Auth::user()->id;
        $m->save();
        return redirect()->back()->with('success', 'Congratulation!!!
        You have successfully applied for the membership.Stay Connected');
        
    }

    public function search(){
        return view('User.Pages.search');
    }

    public function searchResult(Request $request){
        $search=$request->search;
        $members=Member::where('name','LIKE','%'.$search.'%')->orWhere('reg_id','LIKE','%'.$search.'%')->get();
        return view('User.Pages.searchResult')->with(['members'=>$members]);
      
    }

}

