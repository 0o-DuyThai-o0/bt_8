<?php

namespace App\Http\Middleware;

use Closure;

class CheckForMaintenanceMode
{
    public function handle($request, Closure $next)
    {
        if (env('app_maintenance_mode')) {
            return response('Hệ thống đang bảo trì, vui lòng thử lại sau.', 503);
        }

        return $next($request);
    }
}