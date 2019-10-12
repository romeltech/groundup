<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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

        // Event Followup
        if(now()->format('s') % 2){
            return $next($request);
        }

        return response('not allowed');
    }
}
