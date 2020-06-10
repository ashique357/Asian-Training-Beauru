<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'course_title','course_image','course_url'
    ];
    protected $hidden=['landing_id','active'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
