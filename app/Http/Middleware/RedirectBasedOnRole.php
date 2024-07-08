<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/Login');
        }

        $user = Auth::user();

        foreach ($roles as $role) {
            if ($user->hasRole($role)) {
                // Redirect to corresponding route based on role
                switch ($role) {
                    case 'admin':
                        return redirect('/Admin');
                        break;
                    case 'user':
                        return redirect('/Beranda');
                        break;
                    // Add more cases for other roles if needed
                }
            }
        }

        // Default redirect if no matching role found
        return redirect('/Login'); // or any default route
    }
}
