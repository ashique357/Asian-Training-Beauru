<?php

namespace App\Http\View\Composers;

use App\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class TeamComposer{

    public function compose(View $view)
    {
        $teams=Team::where('active',0)->get();
        $view->with('teams',$teams);
    }
}