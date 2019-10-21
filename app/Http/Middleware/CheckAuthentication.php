<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckAuthentication
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
        f(!Auth::check()){
            return redirect('/');
        }
        
        if(!Auth::user()->access){
            return redirect('dashboard');
        }
        return $next($request);
    }
}
