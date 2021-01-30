<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWT
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
		try {
			JWTAuth::parseToken()->authenticate();
			return $next($request);
		} catch (\Throwable $th) {
			abort(403, $th->getMessage());
		}
	}
}
