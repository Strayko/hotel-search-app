<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SilverGoldAndPlatinium
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
        if(Auth::check()) {
            if(Auth::user()->isPlatinium() || Auth::user()->isGold() || Auth::user()->isSilver()) {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
