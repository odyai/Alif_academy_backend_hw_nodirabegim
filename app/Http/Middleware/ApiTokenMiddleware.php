<?php

// app/Http/Middleware/ApiTokenMiddleware.php

namespace App\Http\Middleware;

use App\Exceptions\EnsureTokenException;
use Closure;

class ApiTokenMiddleware
{
    /**
     * @throws EnsureTokenException
     */
    public function handle($request, Closure $next)
    {
        // Check if the request has the 'api_token' header
        $token = $request->header('api_token');

        $expectedToken = config('api_tokens.api_token');

        if ($token !== $expectedToken) {
            throw new EnsureTokenException();
        }

        return $next($request);
    }
}
