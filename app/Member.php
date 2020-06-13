<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=[
    'name','country','email','phone','address','desg','exp','photo','msg','linkedin',
    
    //provider
    'tp_name','tp_email','tp_address','tp_phone','tp_msg','con_person','web',
    
    //corporate
    'org_name','employee','org_con_person','org_email','org_phone','org_msg'
    ];

    protected $hidden=[
        'approved','user_id','member_type','reg_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}