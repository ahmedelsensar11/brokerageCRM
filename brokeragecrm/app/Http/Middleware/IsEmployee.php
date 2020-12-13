<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsEmployee
{
    
    public function handle($request, Closure $next)
    {
        $isAdmin = \Auth::user()->is_admin;
        if($isAdmin != 0)
        {
            return \redirect('/notAuth');
        };
        return $next($request);
    }
}
