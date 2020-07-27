<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Member;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);
        
        $user=Auth::user()->id;
        $m=Member::where('user_id',$user)->firstOrFail();
        $member_id=$m->id;
        
        $comment=new Comment();
        $comment->member_id=$member_id;
        $comment->body=$request->body;
        $comment->post_id=$request->post_id;
        $comment->save();
        return redirect()->back()->with('success','Successfully posted a status');
    }
}
