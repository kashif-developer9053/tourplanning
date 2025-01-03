<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsLoggedIn
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('user.home'); // Redirect to user home page if not authenticated
        }

        return $next($request);
    }
}
