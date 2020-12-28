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
        // dd(Auth::check());
        // $reponse =$next($request);
        // if ( !Auth::check() && ( !Auth::check() && Auth::user()->role != 'AdUSER')) {
        if ( (Auth::check() && Auth::user()->role == 'AdUSER')|| Auth::user()->role == 'Root') {

                     return $next($request);
            
        }
            // $request->ip();
        // dd($request->ip());
        Log::channel('after')->info([$request->ip(),$request->header('User-Agent'),$request->header('cookie')]);
        Log::channel('after')->info('hello');
        return redirect('home');
    }
}
