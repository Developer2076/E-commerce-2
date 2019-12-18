<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
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
//        if(Auth::user()->roles()->pluck('name')->toArray()){
//            return $next($request);
//        }
        $user = Auth::user();
        $roles = $user->roles()->pluck('name')->toArray();
        foreach($roles as $role){
            if($user->hasRole($role)){
                return $next($request);
            }
        }
        return redirect('/users');
    }
}
