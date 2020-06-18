<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name,author_name','publication','issn',
    'content','filesname','price_user','price_member',
    'currency','material_details','tools_details','product_type','cover_image'];
}
