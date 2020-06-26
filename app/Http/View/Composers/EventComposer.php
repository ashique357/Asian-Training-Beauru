<?php

namespace App\Http\View\Composers;

use App\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class EventComposer{

    public function compose(View $view)
    {
        $events=Event::latest()->paginate(3);
        $view->with('events',$events);
    }
}