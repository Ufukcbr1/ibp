<?php

namespace App\Http\Middleware;
use App\Models;
use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;



class CheckAdmin
{

    public function handle(Request $request, Closure $next)
    {
        $userRoles =Auth::user()->roles->pluck('name');
If (!$userRoles->contains('admin')){
    return redirect(route( 'login_admin'))->with('error','You do not have permission');
}
        return $next($request);
    }
}
