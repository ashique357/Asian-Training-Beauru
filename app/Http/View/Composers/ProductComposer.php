<?php

namespace App\Http\View\Composers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class ProductComposer{

    public function compose(View $view)
    {
        $products=Product::latest()->paginate(4);
        $view->with('products',$products);
    }
}