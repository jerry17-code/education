<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLanguage
{
    public function handle($request, Closure $next)
    {
        // Check if session has locale
        $locale = Session::get('locale', 'en'); // default English
        App::setLocale($locale);

        return $next($request);
    }
}
