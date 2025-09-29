<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class elevenPart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Global middleware - It will apears on the every route
        echo "Middleware from controller";
        print_r($request->age);
        if($request->age<=18){
            echo "You  are allowed";
        }else {
            echo "Allowed ";
        }
        return $next($request);
    }
}
