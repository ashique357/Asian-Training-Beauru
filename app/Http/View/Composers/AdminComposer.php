<?php

namespace App\Http\View\Composers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AdminComposer{

    public function compose(View $view)
    {
        $admin=Auth::user();
        $name=$admin->name;
        $email=$admin->email;
        $view->with(['name'=>$name,'email'=>$email]);

    }
}