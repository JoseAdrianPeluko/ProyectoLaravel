<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        //solo chequear si existe
//        $request->route('role')
//    
        $user = $request->user();

        if ($user->role->role == "admin" || $user->role->role == "empleado") {
            return $next($request);
        } else {
            return redirect()->route('index');
        }
    }

}
