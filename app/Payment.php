<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $hidden=[
        'user_id','product_id','payerId','token','price','invoice_id','sell_type'
    ];
}
