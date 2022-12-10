<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // checking suspend status
        if (auth()->user()->suspend == true) {
            // logout
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route("login")->withErrors("Account Suspended, Please Contact Support");
        }


        if (auth()->user()->role == "user") {
            return $next($request);
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard.index');
        }
    }
}
