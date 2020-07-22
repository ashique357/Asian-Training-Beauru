<?php

namespace App\Http\View\Composers;

use App\Certificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class CertificateComposer{

    public function compose(View $view)
    {
        $certificates=Certificate::latest()->paginate(5);
        $view->with('certificates',$certificates);
    }
}