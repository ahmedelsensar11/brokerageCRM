<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsAdmin
{
    
    public function handle($request, Closure $next)
    {
        $isAdmin = \Auth::user()->is_admin;
        if($isAdmin != 1)
        {
            return \redirect('/notAuth');
        };
        return $next($request);
    }
}
