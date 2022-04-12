<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Headers', 'Content-type, X-Auth-Token, Authorization, Origin')
            ->header('Access-Control-Allow-Methods','POST, GET, OPTIONS, PUT');
    }
}
