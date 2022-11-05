<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class terminateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo '<br> excuting statment of terminate method of terminatemiddleware <br>';
        return $next($request);
    }

    public function terminate(Request $request)
    {

        echo '<br> excuting statment of terminate method of terminatemiddleware <br>';
    }
}
