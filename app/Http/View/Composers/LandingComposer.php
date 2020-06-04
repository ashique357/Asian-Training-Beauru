<?php

namespace App\Http\View\Composers;

use App\Landing;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class LandingComposer{

    public function compose(View $view)
    {
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
            $view->with('data',$data);
        }
        else{
            $view->with('data',$data);
        }
    }
}