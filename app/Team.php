<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'name','role','email','image','phone','bio','fb_url','twitt_url'
    ];

    protected $hidden=[
        'active','landing_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
