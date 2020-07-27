<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\User;
use App\Post;
use App\Member;

class PostController extends Controller
{
    public function store(Request $request)
    {   
    	$request->validate([
            'body'=>'required',
        ]);
        $user=Auth::user()->id;
        $m=Member::where('user_id',$user)->firstOrFail();
        $member_id=$m->id;
        
        $post=new Post();
        $post->member_id=$member_id;
        $post->body=$request->body;
        $post->save();
        return redirect()->back()->with('success','Successfully posted a status');
    }

    public function create(){
        $posts=Post::all();
        return view('User.Pages.Member.timeline')->with('posts',$posts);
    }
}

