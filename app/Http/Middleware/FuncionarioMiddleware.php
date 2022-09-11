<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FuncionarioMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth('api')->user();


        if($user){

            return $next($request);

        }
        else {

            return response()->json(['msg' => 'Token invalido OU Expirado'], 401);
        }
    }
}
