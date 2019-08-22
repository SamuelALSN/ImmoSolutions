<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class guestUser extends  Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    public function handle($request, Closure $next)
//    {
//        return $next($request);
//    }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('guest.login');
        }
    }
}
