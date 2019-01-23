<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role;

class Guru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->hasRole('guru')) {
            return $next($request);
        } else {
            return abort(403, 'Hanya pengguna yang memiliki Hak Akses Guru.');;
        }
    }
}
