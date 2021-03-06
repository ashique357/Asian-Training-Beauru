<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Landing extends Model
{
    protected $hidden=['id'];

    protected $fillable=[
        'address','phone','email','time',//menu_id,
        'banner_image','banner_title','banner_paragraph',
        
        'team_title','team_details','f_para1','f_para2','f_para3',
        
        //about section
        'about_image','about_content','about_president_image','about_saying',
        
        //membership section
        'membership_image','membership_benefit','membership_way',

        //Certification
        'certification_benefit','way_to_certified'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','role:1');       
    }

}
