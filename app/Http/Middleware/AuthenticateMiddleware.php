<?php

namespace satlex\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (Auth::check() && Auth::user()->user_type =="user") 
            return $next($request);
        return redirect('/login'); 
    }
}