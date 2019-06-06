<?php

namespace App\Http\Middleware\Site;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAcessoUsuario
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
        $autorizado = false;

        if(Auth::check()){
            if(Auth::user()->nivel <= 1){
                $autorizado = true;
            }
        }

        if(!$autorizado){
            $nivel = 1;
            return redirect()->route('acesso-erro', $nivel);
        }
        
        return $next($request);
    }
}
