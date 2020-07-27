<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\Banner;
use App\Http\Requests\TopNav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Landing;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;
use App\Traits\EmailTrait;
use App\Member;
use Illuminate\Support\Facades\Mail;
use App\Mail\MembershipMail;
use App\Opportunity;
use App\Payment;
use App\User;

class AdminController extends Controller
{   use ImageTrait,RichTextTrait,EmailTrait;
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

    public function index(){
        $product=Payment::where('sell_type',1)->sum('price');
        $certificate=Payment::where('sell_type',2)->sum('price');
        $sell=Payment::all()->sum('price');
        $member=Member::where('approved',1)->count();
        $all=Member::all()->count();
        $user=User::where('role',0)->count();
        return view('Admin.Pages.dashboard')->with(['product'=>$product,'certificate'=>$certificate,'member'=>$member,'all'=>$all,'user'=>$user,'sell'=>$sell]);
    }

    public function topNavIndex(){
        $data=Landing::where('id',1)->first();
        if($data == null){
            $data['address']="No address defined";
            $data['time']="No time defined";
            $data['email']="No email address is set";
            $data['phone']="No phone number given";
            $data['image']="Please select your website logo";
            return view('Admin.Pages.Landing.topNav')->with(['data',$data]);
        }
        else{
            
            return view('Admin.Pages.Landing.topNav')->with(['data',$data]);
        }
        
    }

    public function topNav(Request $request){
        $landing=Landing::where('id',1)->first();
        if($landing==null){
            $l=new Landing();
            $l->id=1;
            $l->address=$request->address;
            $l->time=$request->time;
            $l->email=$request->email;
            $l->phone=$request->phone;
            $image_field='logo';
            $h=240;
            $w=110;
            $image=$this->imageUpload($request,$image_field,'/extras',$h,$w);
            $l->logo=$image;
            $l->save();
            return redirect()->back()->with('sucess','Successfully added top nav bar content in landing page');
        }
        else{
            $landing->address=$request->address;
            $landing->time=$request->time;
            $landing->email=$request->email;
            $landing->phone=$request->phone;
            $image_field='logo';
            $h=240;
            $w=110;
            $image=$this->imageUpload($request,$image_field,'/extras',$h,$w);
            $landing->logo=$image;
            $landing->save();
            return redirect()->back()->with('sucess','Successfully added top nav bar content in landing page');
        }
    }


    public function slider(){
        $data=Landing::where('id',1)->first();
        if($data == null){
            $data['banner_title']="No title defined";
            $data['banner_image']="No image selected";
            return view('Admin.Pages.Landing.slider')->with(['data',$data]);
        }
        else{
            
            return view('Admin.Pages.Landing.slider')->with(['data',$data]);
        }
    }


    public function postSlider(Request $request){
        $landing=Landing::where('id',1)->first();
        if($landing ==null){
            $l=new Landing();
            $l->id=1;
            $l->banner_title=$request->banner_title;
            $image_field='banner_image';
            $image=$this->upload($request,$image_field,'/extras');
            $l->banner_image=json_encode($image);
            $l->save();
            return redirect()->back()->with('sucess','Successfully added slider content in landing page');
        }
        else{
            $landing->banner_title=$request->banner_title;
            $image_field='banner_image';
            $image=$this->upload($request,$image_field,'/extras');
            $landing->banner_image=json_encode($image);
            $landing->save();
            return redirect()->back()->with('sucess','Successfully added slider content in landing page');
        }
    }

    //about section

    public function about_index(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['about_image']="No data";
            $data['about_content']="No data";
            $data['about_president_image']="No data";
            $data['about_saying']="No data";
            
            return view('Admin.Pages.about')->with('data',$data);
        }
        else{
            return view('Admin.Pages.about')->with('data',$data);
        }
        
    }
    
    public function storeIndex(Request $request){
        $f='about_content';
        $detail=$this->richText($request,$f);
        $a=Landing::where('id',1)->first();
        if($a==null){
            $about=new Landing();
            $about->id=1;
            $about->about_content=$detail;
            $image_field='about_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $about->about_image=$image;
            $about->save();
            return redirect()->back()->with('success', 'You have successfully saved about us content');
        }
        else{
            $a->id=1;
            $a->about_content=$detail;
            $image_field='about_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $a->about_image=$image;
            $a->save();
            return redirect()->back()->with('success', 'You have successfully saved about us content');
        }
    }

    public function pmIndex(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['about_president_image']="No data";
            $data['about_saying']="No data";
            return view('Admin.Pages.president')->with('data',$data);
        }
        else{
            return view('Admin.Pages.president')->with('data',$data);
        }
    }

    public function pmStore(Request $request){
        $f='about_saying';
        $detail=$this->richText($request,$f);
        $a=Landing::where('id',1)->first();
        if($a==null){
            $about=new Landing();
            $about->id=1;
            $about->about_saying=$detail;
            $image_field='about_president_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $about->about_president_image=$image;
            $about->save();
            return redirect()->back()->with('success', "You have successfully saved president's message content");
        }
        else{
            $a->id=1;
            $a->about_saying=$detail;
            $image_field='about_president_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $a->about_president_image=$image;
            $a->save();
            return redirect()->back()->with('success', "You have successfully saved president's message content");
        }
    }


    //Membership

    public function way(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['membership_image']="No data";
            $data['membership_way']="No data";
            $data['membership_benefit']="No data";
            return view('Admin.Pages.Membership.way')->with('data',$data);
        }
        else{
            return view('Admin.Pages.Membership.way')->with('data',$data);
        }
    }

    public function way_store(Request $request){
        $f='membership_way';
        $detail=$this->richText($request,$f);
        $m=Landing::where('id',1)->first();
        if($m==null){
            $membership=new Landing();
            $membership->id=1;
            $membership->membership_way=$detail;
            $image_field='membership_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $membership->membership_image=$image;
            $about->save();
            return redirect()->back()->with('success', 'You have successfully saved way to become member content');
        }
        else{
            $m->id=1;
            $m->membership_way=$detail;
            $image_field='membership_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $m->membership_image=$image;
            $m->save();
         return redirect()->back()->with('success', 'You have successfully saved way to become member content');
        }
    }
    public function benefit(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['membership_image']="No data";
            $data['membership_benefit']="No data";
            return view('Admin.Pages.Membership.benefit')->with('data',$data);
        }
        else{
            return view('Admin.Pages.Membership.benefit')->with('data',$data);
        }
    }

    public function benefitStore(Request $request){
        $f='membership_benefit';
        $detail=$this->richText($request,$f);
        $a=Landing::where('id',1)->first();
        if($a==null){
            $m=new Landing();
            $m->id=1;
            $m->membership_benefit=$detail;
            $image_field='membership_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $m->membership_image=$image;
            $m->save();
            return redirect()->back()->with('success', "You have successfully saved Membership benefit content");
        }
        else{
            $a->id=1;
            $a->membership_benefit=$detail;
            $image_field='membership_image';
            $h=720;
            $w=293;
            $image=$this->imageUpload($request,$image_field,'/uploads/images',$h,$w);
            $a->membership_image=$image;
            $a->save();
            return redirect()->back()->with('success', "You have successfully saved Membership benefit content");
        }
    }

    public function indexMember(){
        $members=Member::latest()->paginate(10);
        return view('Admin.Pages.Membership.index')->with('members',$members);
    }

    public function footer(){
        $data=Landing::where('id',1)->first();
        if($data ==null){
            $data['f_para1']="No paragraph";
            $data['f_para2']="No paragraph";
            $data['f_para3']="No paragraph";
            return view('Admin.Pages.Landing.footer')->with('data',$data);
        }
        else{
            return view('Admin.Pages.Landing.footer')->with('data',$data);
        }
    }

    public function PostFooter(Request $request){
        $data=Landing::where('id',1)->first();
        if($data ==null){
            $l=new Landing();
            $l->f_para1=$request->f_para1;
            $l->f_para2=$request->f_para2;
            $l->f_para3=$request->f_para3;
            $l->save();
            return redirect()->back()->with('success', "You have successfully saved footer content");
        }
        else{
            $data->f_para1=$request->f_para1;
            $data->f_para2=$request->f_para2;
            $data->f_para3=$request->f_para3;
            $data->save();
            return redirect()->back()->with('success', "You have successfully saved footer content");
        }
    }

    public function info($id){
        $m=Member::find($id);
        $country=$m->country;
        $c=DB::table('countries')->where('id',$country)->first('name');
        return view('Admin.Pages.Membership.info')->with(['m'=>$m,'c'=>$c]);
    }

    public function accept($id){
        $member=Member::find($id);
        $member->approved=1;
        $b=$member->user()->first();
        $b->member='1';
        $b->save();
        $member->save();
        $template='email.membership'; 
        $to_name=$member->name;
        $to_email=$member->email;
        $subject='Application for membership';
        $from="asian@gmail.com";
        $company="Asian Training Beauru";
        $data=['name'=>$member->name,
            'email'=>$member->email,
            'phone'=>$member->phone,
            'reg'=>$member->reg_id,
            'address'=>$member->address,
            'country'=>$member->country,
            'desg'=>$member->desg,
            'linkedin'=>$member->linkedin,
            'year'=>$member->exp,
            'employee'=>$member->employee,
            'con_person'=>$member->con_person,
            'web'=>$member->web,
            'img'=>$member->image,
            'type'=>$member->type
        ];  
        $this->sendMail($template,$to_name,$to_email,$data,$subject,$from,$company);
        return redirect()->back()->with('success', "Membership Request Accepted for $member->email");
    }

    public function declined($id){
        $member=Member::find($id);
        $member->approved=0;
        $b=$member->user()->first();
        $b->member='0';
        $b->save();
        $member->save();
        return redirect()->back()->with('success', "Membership Request Declined for $member->email");
    }

    public function opportunity_list(){
        $opportunity=Opportunity::latest()->paginate(10);
        return view('Admin.Pages.Opportunity.index')->with(['opportunity'=>$opportunity]);
    }

    public function opportunity_accept($id){
        $op=Opportunity::find($id);
        $op->active=1;
        $op->save();
        return redirect()->back()->with('success', "Opportunity Request Accepted for $op->org_name");
    }

    public function opportunity_declined($id){
        $op=Opportunity::find($id);
        $op->active=0;
        $op->save();
        return redirect()->back()->with('success', "Opportunity Request declined for $op->org_name");
    }

    public function opportunity_info($id){
        $op=Opportunity::find($id);
        $country=$op->country;
        $c=DB::table('countries')->where('id',$country)->first('name');
        return view('Admin.Pages.Opportunity.show')->with(['op'=>$op,'c'=>$c]);
    }

    public function verified(){
        $members=Member::where('approved',1)->latest()->paginate(10);
        return view('Admin.Pages.Membership.verified')->with('members',$members);
    }

}

