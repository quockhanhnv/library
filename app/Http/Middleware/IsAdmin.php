<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class IsAdmin
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
        // request: mọi request từ brower
        // next : nếu pass middware thì là đường dẫn tiếp theo tiếp theo
        if(Auth::user()->users_role_id >= 900)
        {
            return $next($request);
        }
        return response()->view('admin.403');
    }
}
