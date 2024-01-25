<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckUserIdMiddleware
{
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
            return $next($request);
        }

        return redirect('/');
    }
}