<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if (Auth::check()) {
        if (Auth::user()->type == 2) {
          return redirect()->route('home');
        }
        else {
          return $next($request);
        }


      }
      return redirect()->route('home');
        //return $next($request);
    }
}
