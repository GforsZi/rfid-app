<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    public function handle($request, Closure $next)
    {
        if ($request->is('/rfid/scan')) {  // URI yang dikecualikan
            return $next($request);
        }

        return parent::handle($request, $next);
    }
}
