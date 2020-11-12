<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InsideRouteGroup
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
        echo 'this middleware only appliy inside a specified route group';
        return $next($request);
    }
}
