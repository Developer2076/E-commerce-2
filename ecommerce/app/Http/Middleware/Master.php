<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Master
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
        if(!Auth::check()){
            return redirect('users/login');
        }else{
            if(Auth::user()->hasRole('Master')){
                return $next($request);
            }else{
                $user = Auth::user();
                $roles = $user->roles()->pluck('name')->toArray();
                foreach ($roles as $role){
                    if($user->hasRole($role)){
                        return redirect('/dashboard');
                    }
                }
            }
        }
//        return $next($request);
        return redirect('/');
    }
}
