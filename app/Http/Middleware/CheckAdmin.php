<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class CheckAdmin
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

        // $reponse =$next($request);
        if (   Auth::check() && Auth::user()->role != 'AdUSER') {
        Log::channel('after')->info('hello');
            
            return redirect('home');
        }
            // $request->ip();
        // dd($request->ip());
        Log::channel('after')->info([$request->ip(),$request->header('User-Agent'),$request->header('cookie')]);
        return $next($request);
    }
}
