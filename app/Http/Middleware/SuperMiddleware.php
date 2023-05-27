<?php

namespace satlex\Http\Middleware;
use Auth;

use Closure;

class SuperMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
           if (Auth::check() && Auth::user()->user_type =="super_admin") 
            return $next($request);
        return redirect('/login'); 
    }
}