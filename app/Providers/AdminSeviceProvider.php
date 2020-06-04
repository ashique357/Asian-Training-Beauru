<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\AdminComposer;
use Illuminate\Support\Facades\View;

class AdminSeviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('Admin.*','App\Http\View\Composers\AdminComposer');
    }
}
