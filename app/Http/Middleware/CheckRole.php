<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
                                                    ...modifikasi middleqare menjadi array */
    public function handle($request, Closure $next,...$roles)
    {
        // modifikasi middleqare menjadi array
        if(in_array($request->user()->role , $roles)){
             return $next($request);        
        }
        return redirect('/');
       
    }
}
