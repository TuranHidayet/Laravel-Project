<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        view()->composer('admin.*', function ($view) {
            $user = Auth::user();
            return $view->with(compact('user'));
        });

        view()->composer('front*', function ($view) {
            $setting = Setting::first();
            return $view->with(compact('setting'));
        });
    }
}
