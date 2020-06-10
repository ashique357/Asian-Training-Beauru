<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Team;
use Intervention\Image\ImageManager;
use Image;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;

class TeamController extends Controller
{
    use ImageTrait,RichTextTrait;

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
        $teams=Team::paginate(6);
        // dd($teams);
        return view('Admin.Pages.Team.index')->with(['teams'=>$teams]);

    }

    public function create(){
        return view('Admin.Pages.Team.create');
    }

    public function store(Request $request){
        $team=new Team();
        $team->name=$request->name;
        $team->role=$request->role;
        $team->email=$request->email;
        $team->phone=$request->phone;
        $team->fb_url=$request->fb_url;
        $team->twitt_url=$request->twitt_url;
        $field='image';
        $path='/uploads/images';
        $h=200;
        $w=200;
        $team->image=$this->imageUpload($request,$field,$path,$h,$w);
        $f='bio';
        $team->bio=$this->richText($request,$f);
        $team->save();
        return redirect()->back()->with('success', 'You have successfully saved a team member');
    }

    public function edit($id){
        $team=Team::where('id',$id)->first();
        return view('Admin.Pages.Team.edit')->with(['team'=>$team]);
    }

    public function update(Request $request,$id){
        $team=Team::where('id',$id)->first();
        $team->name=$request->name;
        $team->role=$request->role;
        $team->email=$request->email;
        $team->phone=$request->phone;
        $team->fb_url=$request->fb_url;
        $team->twitt_url=$request->twitt_url;
        $field='image';
        $path='/uploads/images';
        $h=200;
        $w=200;
        $team->image=$this->imageUpload($request,$field,$path,$h,$w);
        $f='bio';
        $team->bio=$this->richText($request,$f);
        $team->save();
        return redirect()->back()->with('success', 'You have successfully updated a team member');
    }

    public function delete($id){
        $team=Team::where('id',$id)->first();
        $team->delete();
        return redirect()->back()->with('success', 'You have successfully deleted a team member');
    }
}
