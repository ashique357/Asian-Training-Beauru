<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $hidden=[
        'user_id','product_id','payerId','token','price','invoice_id','sell_type'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function product(){
        return $this->belongsTo('App\Product','product_id');
    }

    public function certificate(){
        return $this->belongsTo('App\Certificate','product_id');
    }
}
