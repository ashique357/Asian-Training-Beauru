<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['guest','auth']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about(){
        return view('User.Pages.about');
    }

    public function president(){
        return view('User.Pages.president');
    }

    public function team(){
        return view('User.Pages.team');
    }
    
    public function teamMember($id){
        $team=Team::where('id',$id)->first();
        return view('User.Pages.teamMember')->with('team',$team);
    }

    public function benefitMember(){
        return view('User.Pages.benefitOfMembership');
    }

    public function wayOfMember(){
        return view('User.Pages.membershipWay');
    }
}
