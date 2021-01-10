<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // 1) if the user is logged in
        if(Auth::check()){

            // 2) if the logged in user is admin
            if(Auth::user()->isAdmin()){

                // go to the next request of the app
                return $next($request);

            }

        }

        // redirect to homepage
        return redirect('/');

    }
}
