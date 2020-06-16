<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillabel=[
        'org_name','country','assignment_details','requirements','approx','fees','position','location','post_type'
    ];

    protected $hidden=['member_id','active'];

    public function member(){
        return $this->belongsTo('App\Member','member_id');
    }
}
