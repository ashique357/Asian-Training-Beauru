<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Opportunity as Oppo;
use App\Opportunity;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;

class OpportunityController extends Controller
{   
    use ImageTrait,RichTextTrait;
    public function __construct(){
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
                elseif($this->user->member !=0){
                    return $next($request);
                }
                else{
                    return redirect('/member/registration');
                }
           }
        })->except(['training','job','cons','showIndex']);
    }
     
    public function index(){
        $countries=DB::table('countries')->get();
        return view('User.Pages.opportunity')->with('countries',$countries);
    }

    public function store(Oppo $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $p=new Opportunity();
        $p->member_id=Auth::user()->members()->first()->id;
        $p->active=0;
        $p->post_type=$request->post_type;
        $val=$p->post_type;
        if($val ==1){
            $p->org_name=$request->org_name[0];
            $c=DB::table('countries')->where('id',$request->country)->first('nicename');
            $p->country=$c->nicename;
            $p->assignment_details=$request->assignment_details[0];
            $p->requirements=$request->requirements[0];
            $p->approx=$request->approx[0];
            $p->fees=$request->fees[0];
            $image_field='image1';
            $h=722;
            $w=404;
            $image=$this->imageUpload($request,$image_field,'/opportunity',$h,$w);
            $p->image=$image;
            
        }

        if($val==2){
            $p->org_name=$request->org_name[1];
            $c=DB::table('countries')->where('id',$request->country)->first('nicename');
            $p->country=$c->nicename;
            $p->assignment_details=$request->assignment_details[1];
            $p->requirements=$request->requirements[1];
            $p->approx=$request->approx[1];
            $p->fees=$request->fees[1];
            $p->position=$request->position;
            $p->location=$request->location;
            $image_field='image2';
            $h=722;
            $w=404;
            $image=$this->imageUpload($request,$image_field,'/opportunity',$h,$w);
            $p->image=$image;
        }

        if($val ==3){
            $p->org_name=$request->org_name[2];
            $c=DB::table('countries')->where('id',$request->country)->first('nicename');
            $p->country=$c->nicename;
            $p->assignment_details=$request->assignment_details[2];
            $p->requirements=$request->requirements[2];
            $p->approx=$request->approx[2];
            $p->fees=$request->fees[2];
            $image_field='image3';
            $h=722;
            $w=404;
            $image=$this->imageUpload($request,$image_field,'/opportunity',$h,$w);
            $p->image=$image;
        }
        $p->save();
        return redirect()->back()->with('success', 'Congratulation!!!
        You have successfully made a post.Wait for the approval');
    }

    public function training(){
        $trainings=Opportunity::where('active',1)->where('post_type',1)->latest()->paginate(3);
        return view('User.Pages.trainings')->with(['trainings'=>$trainings]);
    }

    public function job(){
        $jobs=Opportunity::where('active',1)->where('post_type',2)->latest()->paginate(3);
        return view('User.Pages.jobs')->with(['jobs'=>$jobs]);
    }
    public function cons(){
        $cons=Opportunity::find(1,'id')->firstOrFail();
        $cons=Opportunity::where('active',1)->where('post_type',3)->latest()->paginate(3);
        return view('User.Pages.consultations')->with(['cons'=>$cons]);
    }

    public function form(){
        $countries=DB::table('countries')->get();
        return view('Admin.Pages.Opportunity.form')->with('countries',$countries);
    }

    public function storeForm(Oppo $request){
        $validated=$this->validate($request,$request->rules(),$request->messages());
        $p=new Opportunity();
        $p->active=1;
        $p->post_type=$request->post_type;
        $val=$p->post_type;
        if($val ==1){
            $p->org_name=$request->org_name[0];
            $c=DB::table('countries')->where('id',$request->country)->first('nicename');
            $p->country=$c->nicename;
            $p->assignment_details=$request->assignment_details[0];
            $p->requirements=$request->requirements[0];
            $p->approx=$request->approx[0];
            $p->fees=$request->fees[0];
            $image_field='image1';
            $h=722;
            $w=404;
            $image=$this->imageUpload($request,$image_field,'/opportunity',$h,$w);
            $p->image=$image;
            
        }

        if($val==2){
            $p->org_name=$request->org_name[1];
            $c=DB::table('countries')->where('id',$request->country)->first('nicename');
            $p->country=$c->nicename;
            $p->assignment_details=$request->assignment_details[1];
            $p->requirements=$request->requirements[1];
            $p->approx=$request->approx[1];
            $p->fees=$request->fees[1];
            $p->position=$request->position;
            $p->location=$request->location;
            $image_field='image2';
            $h=722;
            $w=404;
            $image=$this->imageUpload($request,$image_field,'/opportunity',$h,$w);
            $p->image=$image;
        }

        if($val ==3){
            $p->org_name=$request->org_name[2];
            $c=DB::table('countries')->where('id',$request->country)->first('nicename');
            $p->country=$c->nicename;
            $p->assignment_details=$request->assignment_details[2];
            $p->requirements=$request->requirements[2];
            $p->approx=$request->approx[2];
            $p->fees=$request->fees[2];
            $image_field='image3';
            $h=722;
            $w=404;
            $image=$this->imageUpload($request,$image_field,'/opportunity',$h,$w);
            $p->image=$image;
        }
        $p->save();
        return redirect()->back()->with('success', 'Congratulation!!!
        You have successfully made a post');
    }

    public function showIndex($id){
        $opportunity=Opportunity::where('id',$id)->firstOrFail();
        return view('User.Pages.opportunityIndex')->with(['opportunity'=>$opportunity]);
    }
}

