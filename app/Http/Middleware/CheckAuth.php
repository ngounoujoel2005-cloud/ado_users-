<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class CheckAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('login.form')->with('error', 'Veuillez vous connecter en tant qu\'admin.');
        }

        return $next($request);
    }
}
