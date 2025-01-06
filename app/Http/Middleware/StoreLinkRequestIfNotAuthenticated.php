<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreLinkRequestIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request):Response $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->check()) {
            session(['destination_url' => $request->destination_url]);

            return redirect()->route('login');
        }

        return $next($request);
    }
}
