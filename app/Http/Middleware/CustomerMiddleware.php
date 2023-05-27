<?php

namespace satlex\Http\Middleware;
use Auth;

use Closure;

class CustomerMiddleware
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
           if (Auth::check() && Auth::user()->user_type =="customer") 
            return $next($request);
        return redirect('/login'); 
    }
}