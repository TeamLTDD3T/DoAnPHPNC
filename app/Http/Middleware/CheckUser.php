<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class CheckUser extends Middleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            return redirect()->intended('home');
        }
        return $next($request);
    }
}
