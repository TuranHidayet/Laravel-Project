<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function changeLang($locale)
    {
        if (!in_array($locale, ['en', 'az'])) {
            abort(400, 'Invalid locale'); // Yanlış dildə istək üçün xətanı qaytarır
        }

        session(['locale' => $locale]); // Dil sessiyaya yazılır
        App::setLocale($locale);       // Tətbiqin dili dəyişdirilir

        return redirect()->back();
    }
}
