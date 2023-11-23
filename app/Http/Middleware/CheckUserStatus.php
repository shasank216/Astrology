<?php

namespace App\Http\Middleware;

use Closure;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class CheckUserStatus
 */
class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (getSettingValue('email_verified') && ! getLogInUser()->email_verified_at) {
            Auth::logout();
            Flash::error('Please verify your email.');

            return \Redirect::to('login');
        }
        if (Auth::check() && ! getLogInUser()->status) {
            Auth::logout();
            Flash::error('Your Account is currently disabled, please contact to administrator.');

            return \Redirect::to('login');
        }

        return $response;
    }
}
