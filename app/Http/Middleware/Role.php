<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // if (Auth::check()){
        //     $roles = explode('-', $role);
        //     foreach($roles as $group) {
        //         if(Auth::user()->role == $group){
        //             return $next($request);
        //         }
        //     }
        // }


        if(Auth::check() && Auth::user()->role == "admin"){
            return $next($request);
        };


        return redirect('/access-denied');
    }
}