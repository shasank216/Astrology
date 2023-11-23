<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class XSS
 */
class XSS
{
    /**
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->route()->getName() == 'cms.update') {
            return $next($request);
        }

        $input = $request->all();
        array_walk_recursive($input, function (&$input) {
            $input = (is_null($input)) ? null : strip_tags($input);
        });
        $request->merge($input);

        return $next($request);
    }
}
