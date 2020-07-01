<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable=[
        'name','country','year','contact_person','web','contact','members','details'
    ];

    public function admin(){
        return $this->belongsTo('App\User','role:1');
    }
}
