<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    //set locale
    public function set_locale($locale)
    {
        Session::put('set_locale', $locale);
        return Redirect::back();
    }
}
