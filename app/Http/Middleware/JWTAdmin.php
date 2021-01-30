<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAdmin
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
		try {
			JWTAuth::parseToken()->authenticate();
			if(auth()->user()->role !== 'ADMIN') {
				abort(400, 'Access denined');
			}
			return $next($request);
		} catch (\Throwable $th) {
			abort(403, $th->getMessage());
		}
	}
}
