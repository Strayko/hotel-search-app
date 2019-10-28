<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        $parametar = $request->getRequestUri();
        $parametarExport = substr($parametar, 1,2);
        if($parametarExport == 'en') {
            $locale = 'en';
            if (! $request->expectsJson()) {
                return route('login', $locale);
            }
        } else {
            $locale = 'de';
            if(! $request->expectsJson()) {
                return route('login', $locale);
            }
        }



    }


}
