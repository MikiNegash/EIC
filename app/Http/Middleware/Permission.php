<?php

namespace App\Http\Middleware;

use App\Models\Actor\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $permission_name): Response
    {
        if (!auth()->check() || !$request->user()->hasPermissionWithName($permission_name)) {
            return redirect(route('login'));
        }

        return $next($request);
    }
}
