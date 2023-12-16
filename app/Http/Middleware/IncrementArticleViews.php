<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IncrementArticleViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!$request->session()->has('artikel_' . $request->artikel->id)) {
        //     $request->artikel->increment('views');
        //     $request->session()->put('artikel_' . $request->artikel->id, 1);
        // }
        return $next($request);
    }
}
