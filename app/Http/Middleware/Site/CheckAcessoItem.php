<?php

namespace App\Http\Middleware\Site;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAcessoItem
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
        if(Auth::user()->nivel > 2){

            $nivel = 2;
            return redirect()->route('acesso-erro', $nivel);
        }
        return $next($request);
    }
}
