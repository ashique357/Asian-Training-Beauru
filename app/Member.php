<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
    'name','country','email',
    'phone','address','desg',
    'org','exp','photo','msg',
    'linkedin','con_person',
    'web','employee','approved'
    ];

    protected $hidden=[
        'approved','user_id','member_type','reg_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}