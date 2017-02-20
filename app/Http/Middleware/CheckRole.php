<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        
        switch($request->route('role'))
        {
            case "trabajador": {
                    echo 'view trabajador';
                    break;
            }
            case "admin": {
                    echo 'view admin';
                    break;
            }
            
        }
        
//         if ( $request->user()->email="joseadrianpeluko@gmail.com") {
//             
//        }
       
        
        return $next($request);
    }
}
