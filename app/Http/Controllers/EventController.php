<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Traits\ImageTrait;
use App\Traits\RichTextTrait;
use App\Traits\EmailTrait;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
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
        })->except(['seminar_index','networking_index','eventShow']);
    }
    public function create(){
        return view('Admin.Pages.Event.create');
    }

    public function store(Request $request){
        $event=new Event();
        $event->title=$request->title;
        $event->event_type=$request->event_type;
        $event->date=$request->date;
        $event->time=$request->time;
        $event->location=$request->location;
        $event->contact=$request->contact;
        $event->fees=$request->fees;
        $event->registration=$request->registration;
        $fieldname='purpose';
        $detail=$this->richText($request,$fieldname);
        $event->purpose=$detail;
        $image_field='image';
        $h=722;
        $w=404;
        $image=$this->imageUpload($request,$image_field,'/events',$h,$w);
        $event->image=$image;
        $event->save();
        return redirect()->back()->with('success', "Event created");
    }

    public function edit($id){
        $event=Event::where('id',$id)->firstOrFail();
        return view ('Admin.Pages.Event.edit')->with(['event'=>$event]);
    }

    public function update(Request $request,$id){
        $event=Event::where('id',$id)->firstOrFail();
        $event->title=$request->title;
        $event->event_type=$request->event_type;
        $event->date=$request->date;
        $event->time=$request->time;
        $event->location=$request->location;
        $event->contact=$request->contact;
        $event->fees=$request->fees;
        $event->registration=$request->registration;
        $fieldname='purpose';
        $detail=$this->richText($request,$fieldname);
        $event->purpose=$detail;
        $image_field='image';
        $h=722;
        $w=404;
        $image=$this->imageUpload($request,$image_field,'/events',$h,$w);
        $event->image=$image;
        $event->save();
        return redirect()->back()->with('success', "Event edited");
    }

    public function index(){
        $events=Event::latest()->paginate(10);
        return view('Admin.Pages.Event.index')->with(['events'=>$events]);
    }

    public function show($id){
        $event=Event::where('id',$id)->firstOrFail();
        return view('Admin.Pages.Event.show')->with(['event'=>$event]);        
    }

    public function seminar_index(){
        $events=Event::where('event_type','1')->latest()->paginate(10);
        return view('User.Pages.seminar')->with(['events'=>$events]);
    }
    public function networking_index(){
        $events=Event::where('event_type','2')->latest()->paginate(10);
        return view('User.Pages.networking')->with(['events'=>$events]);
    }
    public function eventShow($name){
        $event=Event::where('title',$name)->firstOrFail();
        return view('User.Pages.eventShow')->with(['event'=>$event]);
    }

    public function booking(Request $request){
        $user_id=$this->user->id;
        $event_id=$request->event_id;
        $event=Event::where('id',$event_id)->firstOrFail();
        $a=$event->users()->sync($user_id);
        return redirect()->back()->with('success', "Successfully booked your seat"); 
    }
}
