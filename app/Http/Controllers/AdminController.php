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
            $data['btn_name']="No data";
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
        if($l == null){
        $la=new landing();
        $la->id=1;
        $la->address=$request->address;
        $la->email=$request->email;
        $la->phone=$request->phone;
        $la->time=$request->time;
        $la->save();
        return response()->json();    
        }
        else{

        $l->address=$request->address;
        $l->email=$request->email;
        $l->phone=$request->phone;
        $l->time=$request->time;
        $l->save();
        return response()->json();

     }
    }

    public function banner(Banner $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $banner=Landing::where('id',1)->first();
        if($banner == null){
            $b=new landing();
            $b->id=1;
            $b->banner_title=$request->banner_title;
            $b->banner_paragraph=$request->banner_paragraph;
            $b->banner_url=$request->banner_url;
            $b->btn_name=$request->btn_name;
            if($request->hasFile('banner_image')){
                $img=$request->file('banner_image');
                $title= time().'.'.$img->getClientOriginalExtension();
                $filePath=public_path('uploads/images');
                $resize=Image::make($img);
                $resize->resize(1920,722)->save($filePath.'/'.$title);
                $b->banner_image=$resize->basename;
            }
            $b->save();
            return response()->json();    
            }
            else{
            $banner->banner_title=$request->banner_title;
            $banner->banner_paragraph=$request->banner_paragraph;
            $banner->banner_url=$request->banner_url;
            $banner->btn_name=$request->btn_name;
            if($request->hasFile('banner_image')){
                $img=$request->file('banner_image');
                $title= time().'.'.$img->getClientOriginalExtension();
                $filePath=public_path('uploads/images');
                $resize=Image::make($img);
                $resize->resize(1920,722)->save($filePath.'/'.$title);
                $banner->banner_image=$resize->basename;
            }
            $banner->save();
            return response()->json();
    
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
            dd($id);     return redirect()->back()->with('success', 'You have successfully saved way to become member content');
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

}

