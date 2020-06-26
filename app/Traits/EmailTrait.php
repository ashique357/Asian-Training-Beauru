<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MembershipMail;

  
trait EmailTrait {
   
    public function sendMail($template,$to_name,$to_email,$data,$subject,$from,$company){
        if($to_email == null){
            return redirect()->back()->with('error','No email found');
        }
        else{
            Mail::send($template, $data, function($message) use ($to_name, $to_email,$subject,$from,$company) {
                $message->to($to_email, $to_name)->subject($subject);
                $message->from($from,$company);
        });
        }
 
    }
}