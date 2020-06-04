<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Landing extends Model
{
    protected $hidden=['id'];

    protected $fillable=[
        'address','phone','email','time',//menu_id,
        'banner_image','banner_title','banner_url','banner_paragraph',
        'course_title','course_url','faculty_title','faculty_url','faculty_paragraph',
        //'popular_course_id'//
        //'blog_id'
        'fb_url','twitt_url','f_para1','f_para2','f_para3'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','role:1');       
    }
}
