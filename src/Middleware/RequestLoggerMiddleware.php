<?php
namespace Sontq\Middleware;

use Illuminate\Support\Facades\Log;

class RequestLoggerMiddleware
{
  public function handle($request, \Closure $next)
  {

    $url = $request->fullUrl();
    $method = $request->getMethod();

    Log::debug(sprintf('METHOD: %s: URL %s', $method, $url));

    return $next($request);
  }
}