<?php

namespace Subway\Http\Middleware;

use Closure;
use App;
use Redirect;

class UseSSL
{
    public function handle($request, Closure $next)
    {
          if (!$request->secure() && env('APP_ENV') === 'local')
          {
              return redirect()->secure($request->getRequestUri());
          }
          return $next($request);
    }
}