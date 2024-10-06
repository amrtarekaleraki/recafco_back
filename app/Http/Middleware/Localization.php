<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    public function handle($request, Closure $next)
    {
        // If the session has a locale set, apply it
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            // Default to 'en' if no locale is set
            App::setLocale('en');
        }

        return $next($request);
    }
}
