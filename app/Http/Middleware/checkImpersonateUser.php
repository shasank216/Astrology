<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkImpersonateUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Request::route()->getName() == 'impersonate.leave') {
            getLogInUser()->leaveImpersonation();

            return redirect()->route('admin.dashboard');
        }
        if (session('impersonated_by')) {
            if (getLogInUser()->hasRole('doctor')) {
                return redirect()->route('doctors.dashboard');
            } elseif (getLogInUser()->hasRole('patient')) {
                return redirect()->route('patients.dashboard');
            }

            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
