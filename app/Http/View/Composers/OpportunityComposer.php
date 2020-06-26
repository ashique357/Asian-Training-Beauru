<?php

namespace App\Http\View\Composers;

use App\Opportunity;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class OpportunityComposer{

    public function compose(View $view)
    {
        $opportunities=Opportunity::latest()->paginate(3);
        $view->with('opportunities',$opportunities);
    }
}