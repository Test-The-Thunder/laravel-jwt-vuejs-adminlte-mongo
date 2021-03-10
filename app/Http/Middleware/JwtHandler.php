<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\JWTException;

class JwtHandler
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
            $user = JWTAuth::parseToken()->authenticate();
            // $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException){
                return response()->json(['response'=>'Error', 'Message' => 'Token is Invalid']);
            }else if ($e instanceof TokenExpiredException){
                return response()->json(['response'=>'Error', 'Message' => 'Token is Expired']);
            }else if ($e instanceof JWTException){
                return response()->json(['response'=>'Error', 'Message' => 'There is problem with token']);
            }else{
                return response()->json(['response'=>'Error', 'Message' => 'Authorization Token not found']);
            }
        }
        return $next($request);
    }
}
