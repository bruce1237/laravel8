<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RouteMiddleware
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
        echo 'this is a rouTe miDDle wARe';
        return $next($request);
    }
}
