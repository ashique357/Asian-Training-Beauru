<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;
use App\Traits\EmailTrait;
use App\Category;
use App\Certificate;
use App\Payment;
use Illuminate\Support\Facades\Auth;


class CertificateController extends Controller
{
    use ImageTrait,RichTextTrait,EmailTrait;

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
    })->except(['benefitIndex','wayIndex','certificate','details','list']);
}

    public function benefit(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['certification_benefit']="No data";
            return view('Admin.Pages.Certificate.benefit')->with('data',$data);
    }
    else{
        return view('Admin.Pages.Certificate.benefit')->with('data',$data);
      }
    }

    public function postBenefit(Request $request){
        $f='certification_benefit';
        $detail=$this->richText($request,$f);
        $a=Landing::where('id',1)->first();
        if($a==null){
            $c=new Landing();
            $c->certification_benefit=$detail;
            $c->save();
            return redirect()->back()->with('success', 'You have successfully saved certification benefit content');
        }
        else{
            $a->id=1;
            $a->certification_benefit=$detail;
            $a->save();
            return redirect()->back()->with('success', 'You have successfully saved certification benefit content');
        }

    }

    public function way_certified(){
        $data=Landing::where('id',1)->first();
        if($data==null){
            $data['way_to_certified']="No data";
            return view('Admin.Pages.Certificate.way')->with('data',$data);
    }
    else{
        return view('Admin.Pages.Certificate.way')->with('data',$data);
      }
    }

    public function postWay_certified(Request $request){
        $f='way_to_certified';
        $detail=$this->richText($request,$f);
        $a=Landing::where('id',1)->firstOrFail();
        if($a==null){
            $c=new Landing();
            $c->way_to_certified=$detail;
            $c->save();
            return redirect()->back()->with('success', 'You have successfully saved certification process content');
        }
        else{
            $a->id=1;
            $a->way_to_certified=$detail;
            $a->save();
            return redirect()->back()->with('success', 'You have successfully saved certification process content');
        }

    }

    public function benefitIndex(){
        return view('User.Pages.CertificateBenefit');
    }
    public function wayIndex(){
        return view('User.Pages.CertificateWay');
    }

    
    public function create(){
        $categories=Category::get();
        return view('Admin.Pages.Certificate.create')->with(['categories'=>$categories]);
    }

    public function store(Request $request){
        $c=new Certificate();
        $c->name=$request->name;
        $c->medium=$request->medium;
        $c->modules=$request->modules;
        $c->approx=$request->approx;
        $c->level=$request->level;
        $c->fees=$request->fees;
        $c->currency=$request->currency;
        $c->category_id=$request->category_id;
        $image_field='image';$h=720;$w=293;
        $image=$this->imageUpload($request,$image_field,'/certificates',$h,$w);
        $c->image=$image;
        
        $f1='details';
        $details=$this->richText($request,$f1);
        $f2='context';
        $context=$this->richText($request,$f2);
        $f3='evaluation';
        $evaluation=$this->richText($request,$f3);
        $f4='objective';
        $objective=$this->richText($request,$f4);

        $c->details=$details;
        $c->context=$context;
        $c->evaluation=$evaluation;
        $c->objective=$objective;
        $c->save();
        return redirect()->back()->with('success', 'You have successfully saved certificate');
    }

    public function edit($id){
        $c=Certificate::findOrFail($id);
        $categories=Category::get();
        return view('Admin.Pages.Certificate.edit')->with(['c'=>$c,'categories'=>$categories]);
    }

    public function update(Request $request,$id){
        $c=Certificate::findOrFail($id);
        $c->name=$request->name;
        $c->medium=$request->medium;
        $c->modules=$request->modules;
        $c->approx=$request->approx;
        $c->level=$request->level;
        $c->fees=$request->fees;
        $c->currency=$request->currency;
        $c->category_id=$request->category_id;
        $image_field='image';$h=720;$w=293;
        $image=$this->imageUpload($request,$image_field,'/certificates',$h,$w);
        $c->image=$image;
        
        $f1='details';
        $details=$this->richText($request,$f1);
        $f2='context';
        $context=$this->richText($request,$f2);
        $f3='evaluation';
        $evaluation=$this->richText($request,$f3);
        $f4='objective';
        $objective=$this->richText($request,$f4);

        $c->details=$details;
        $c->context=$context;
        $c->evaluation=$evaluation;
        $c->objective=$objective;
        $c->save();
        return redirect()->back()->with('success', 'You have successfully updated certificate');
    }

    public function index(){
        $certificates=Certificate::latest()->paginate(10);
        return view('Admin.Pages.Certificate.index')->with(['certificates'=>$certificates]);
    }

    public function show($id){
        $certificate=Certificate::findOrFail($id);
        return view('Admin.Pages.Certificate.show')->with(['certificate'=>$certificate]);
    }

    public function delete($id){
        $c=Certificate::findOrFail($id);
        $c->delete();
    }

    public function certificate(){
        $certificates=Certificate::latest()->paginate(10);
        return view ('User.Pages.certificates')->with(['certificates'=>$certificates]);
    }

    public function details($name){
        $c=Certificate::where('name',$name)->firstOrFail();
        return view('User.Pages.certificateDetails')->with(['c'=>$c]);
    }

    public function list(){
        $certificates=Certificate::latest()->paginate(10);
        return view('User.Pages.certificateApply')->with(['certificates'=>$certificates]);
    }
    public function paid(){
        $paid=Payment::where('sell_type',2)->latest()->paginate(10);
        return view('Admin.Pages.Payment.certificate')->with('paid',$paid);
    }
}

