<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class CheckLogout extends Middleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::guest()){
            return redirect()->intended('login');
        }
        return $next($request);
    }
}
