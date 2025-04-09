<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function change($lang)
    {
        if (in_array($lang, ['en', 'ar', 'tr'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }

        return back(); // للرجوع إلى الصفحة السابقة
    }
}
