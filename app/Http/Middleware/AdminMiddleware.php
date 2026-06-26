<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('admin_logged_in')) {
            return redirect()->route('admin.login.form')->with('error', 'Please log in to access the admin panel.');
        }

        return $next($request);
    }
}
