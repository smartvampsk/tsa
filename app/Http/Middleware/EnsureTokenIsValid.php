<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('token') !== 'my-secret-token') {
            return response()->json([
                'status' => '500',
                'message' => 'Invalid Token'
            ]);
        }
        return $next($request);
    }
}
