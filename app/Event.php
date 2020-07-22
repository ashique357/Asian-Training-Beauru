<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'data','time','location','purpose','contact','fees','registration','event_type','title','image'
    ];

    public function users(){
        return $this->belongsToMany('App\User','event_user','event_id','user_id')->withPivot('id');
    }
}
