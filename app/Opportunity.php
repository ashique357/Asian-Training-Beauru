<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillabel=[
        'org_name','country','assignment_details','requirements','approx','fees','position','location'
    ];

    protected $hidden=['member_id'];

    // public function member
}
