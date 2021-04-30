<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(Auth::user()){
            if(auth()->user()->getAs() != $role){
                return redirect('/home');
            }
            $response = $next($request);
            return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
                ->header('Pragma','no-cache') //HTTP 1.0
                ->header('Expires','Sat, 01 Jan 1990 00:00:00 GMT'); // // Date in the past
        }else{
            return redirect('/');
        }
    }
}
