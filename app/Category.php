<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];

    // public function certificates(){
    //     return $this->belongsToMany('App\Certificate');
    // }
}
