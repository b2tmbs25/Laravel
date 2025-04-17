<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class customAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    { 
        $path =$request->path();
        if (($path=="login"|| $path=="register") && session::get('user')){
            return redirect('/');
        }
        else if (($path!='login' && session::get('user') && ($path!='register' && !session::get('user')))){
            return redirect('login');
        }
        return $next($request);
    }
}
