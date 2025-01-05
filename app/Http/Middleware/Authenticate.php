<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        // Check if admin is logged in
        if (session()->has('adminName')) {
            return $next($request);
        }

        // Check if user is logged in
        if (session()->has('userName')) {
            return $next($request);
        }

        // Redirect to respective login page if neither is logged in
        if ($request->is('admin/*')) {
            return redirect()->route('admin.sign')->with('msg', 'Please log in as admin.');
        } elseif ($request->is('user/*')) {
            return redirect()->route('user.sign')->with('msg', 'Please log in as user.');
        }

        return redirect('/');
    }
}
