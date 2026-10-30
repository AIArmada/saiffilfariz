<?php

namespace App\Http\Middleware;

use AIArmada\CommerceSupport\Support\OwnerContext;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Single-owner site: analytics runs in explicit global context, the
 * ecosystem-sanctioned middleware pattern (OwnerContext::setForRequest).
 */
class SignalsOwnerContext
{
    public function handle(Request $request, Closure $next): Response
    {
        OwnerContext::setForRequest(null);

        return $next($request);
    }
}
