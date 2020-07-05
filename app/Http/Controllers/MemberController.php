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
use App\Http\Requests\Member as ReqMember;



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
 
    public function store(ReqMember $request){
        $m=new Member();
        //individual
        $val=$m->member_type=$request->member_type;
        if($val==1){
            $m->name=$request->name[0];
            $m->country=$request->country;
            $m->email=$request->email[0];
            $m->phone=$request->phone[0];
            $m->address=$request->address[0];
            $m->desg=$request->desg;
            $m->linkedin=$request->linkedin;
            $m->exp=$request->exp[0];
            $m->msg=$request->msg[0];
            $image_field='photo';
            $h=150;
            $w=150;
            $image=$this->imageUpload($request,$image_field,'/member',$h,$w);
            $m->photo=$image;
        }
        //provider
        if($val==2){
            $m->name=$request->name[1];
            $m->email=$request->email[1];
            $m->address=$request->address[1];
            $m->web=$request->web;
            $m->exp=$request->exp[1];
            $m->phone=$request->phone[1];
            $m->con_person=$request->con_person[0];
            $m->msg=$request->msg[1];
        }
        if($val==3){
            $m->name=$request->name[2];
            $m->employee=$request->employee;
            $m->con_person=$request->con_person[1];
            $m->email=$request->email[2];
            $m->phone=$request->phone[2];
            $m->msg=$request->msg[2];
        }
        //corporate
        
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

