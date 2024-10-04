<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (session()->has('app_locale')) {
            App::setLocale(session('app_locale'));
        }

        return $next($request);
    }
}
