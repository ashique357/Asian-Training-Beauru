<?php

namespace App\Http\View\Composers;

use App\Certificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class CertificateComposer{

    public function compose(View $view)
    {
        $certificates=Certificate::latest()->get();
        $view->with('certificates',$certificates);
    }
}