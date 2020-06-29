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
            $data['logo']="No data";
            $data['banner_image']="No data";
            $data['team_title']="No data";
            $data['team_details']="No data";
            $data['banner_title']="No data";
            
            
            $data['f_para1']="No data";
            $data['f_para2']="No data";
            $data['f_para3']="No data";
            //about_content
            $data['about_image']="No data";
            $data['about_content']="No data";
            $data['about_president_image']="No data";
            $data['about_saying']="No data";
            
            //membership-content
            $data['membership_image']="No data";
            $data['membership_way']="No data";
            $data['membership_benefit']="No data";
            $view->with('data',$data);
        }
        else{
            $view->with('data',$data);
        }
    }
}