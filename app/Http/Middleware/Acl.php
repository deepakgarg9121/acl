<?php

namespace App\Http\Middleware;

use Closure;

class Acl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
		// Get the required roles from the route
		$perm = $this->getRequiredRoleForRoute($request->route());
		// Check if a role is required for the route, and
		// if so, ensure that the user has that role.
        
		if($request->user()->checkPerms($perm) || !$perm)
		{ 
			return $next($request);
		}
        return redirect()->intended('error/error_500');
		/*return response([
			'error' => [
				'code' => 'INSUFFICIENT_ROLE',
				'description' => 'You are not authorized to access this resource.'
			]
		], 500);*/
	}
	private function getRequiredRoleForRoute($route)
	{
		$actions = $route->getAction();
		return isset($actions['permissions']) ? $actions['permissions'] : null;
	}
      
}
