<?php

namespace App\Http\View\Composers;

use App\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class TeamComposer{

    public function compose(View $view)
    {
        $teachers=Team::where('active',1)->latest()->paginate(4);
        $view->with('teachers',$teachers);
    }
}