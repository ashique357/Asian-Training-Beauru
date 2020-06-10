<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use App\Http\Requests\SingleMember;
use App\Http\Requests\Trainer;
use App\Http\Requests\Organization;
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
        $this->middleware('auth');
       
    }

    public function person_index(){
        $countries=DB::table('countries')->get();
        return view('User.Pages.individual')->with('countries',$countries);
    }

    public function post_memberPerson(SingleMember $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $m=new Member();
        $m->name=$request->name;
        $m->email=$request->email;
        $m->phone=$request->phone;
        $m->address=$request->address;
        $m->country=$request->country;
        $m->exp=$request->exp;
        $m->desg=$request->desg;
        $m->msg=$request->msg;
        $m->linkedin=$request->linkedin;
        $m->member_type=$request->member_type;
        $m->user_id=Auth::user()->id;
        $m->reg_id= 'M_'.mt_rand(1000000, 9999999);
        $image_field='photo';
        $h=150;
        $w=150;
        $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
        $m->photo=$image;
        $m->save();
        return redirect()->back()->with('success', 'Congratulation!!!
        You have successfully apply for the membership.Stay Connected');
    }

    public function trainer_index(){
        $countries=DB::table('countries')->get();
        return view('User.Pages.trainer')->with('countries',$countries);
    }

    public function post_trainer(Trainer $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $m=new Member();
        $m->name=$request->name;
        $m->email=$request->email;
        $m->phone=$request->phone;
        $m->address=$request->address;
        $m->country=$request->country;
        $m->exp=$request->exp;
        $m->msg=$request->msg;
        $m->web=$request->web;
        $m->member_type=$request->member_type;
        $m->user_id=Auth::user()->id;
        $m->reg_id= 'TP_'.mt_rand(1000000, 9999999);
        $m->con_person=$request->con_person;
        $m->save();
        return redirect()->back()->with('success', 'Congratulation!!!
        You have successfully apply for the training provider membership.We will contact with you soon');
    }

    public function organization_index(){
        $countries=DB::table('countries')->get();
        return view('User.Pages.corporate')->with('countries',$countries);
    }

    public function post_organization(Organization $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $m=new Member();
        $m->name=$request->name;
        $m->email=$request->email;
        $m->phone=$request->phone;
        $m->address=$request->address;
        $m->country=$request->country;
        $m->exp=$request->exp;
        $m->msg=$request->msg;
        $m->web=$request->web;
        $m->member_type=$request->member_type;
        $m->user_id=Auth::user()->id;
        $m->reg_id= 'CO_'.mt_rand(1000000, 9999999);
        $m->con_person=$request->con_person;
        $m->save();
        return redirect()->back()->with('success', 'Congratulation!!!
        You have successfully apply for the corporate membership.We will contact with your organization soon');
    }
}
