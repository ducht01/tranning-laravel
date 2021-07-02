<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        dd($request->routename);
        if ($request->age <= 18) {
            dd(response('Bạn chưa đủ 18 tuổi'));
        }

        return $next($request);
    }
}
