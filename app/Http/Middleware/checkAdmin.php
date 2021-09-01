<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if (Auth::user()->loaitk===1 || Auth::user()->loaitk===3){
                return $next($request);
            }
            return redirect()->route('dangxuatAdmin');
        }
        return redirect()->route('danhnhapAdmin');
    }
}
