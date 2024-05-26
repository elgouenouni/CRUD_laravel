<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Symfony\Component\HttpFoundation\Response;

class logRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('IP:'.$request->ip().'URL:'.
        $request->fullUrl(). 'MRTHOD :'. $request->method()
    );
        return $next($request);
    }
}
