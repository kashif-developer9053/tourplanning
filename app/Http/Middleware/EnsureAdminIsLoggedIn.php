<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureAdminIsLoggedIn
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
        // Check if the admin is authenticated
        if (!Auth::check() || !Auth::user()->isAdmin) {
            // Redirect to admin login if not authenticated
            return redirect()->route('admin.sign');
        }

        return $next($request);
    }
}
