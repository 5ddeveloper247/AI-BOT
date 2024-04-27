<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {

        // dd('ia m ehr e');

        // Check if the user is authenticated and is an admin
        if (!Auth::check() ||  !Auth::user()->role == 'admin') {
            // If not authenticated as an admin, redirect to admin login
            return redirect('/admin/login');
        }

        // If authenticated as an admin, continue to the next middleware
        return $next($request);
    }
}
