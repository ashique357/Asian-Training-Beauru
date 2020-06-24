<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable=['name','medium','modules','approx','level','fees','currency',
    'details','context','evaluation','objective','category_id','image'];

    protected $hidden=[];
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
