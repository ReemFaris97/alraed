<?php

namespace App\Http\Middleware;

use Closure;

class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$permission)
    {
        $perm = auth()->user()->permissions()->pluck('name')->toArray();
        if(in_array($permission,$perm)){

            return $next($request);

        }else{
            alert()->error('عفوا! ليس لديك صلاحية الدخول هنا.. تأكد من صلاحياتك');

            return redirect('dashboard');
        }
    }
}
