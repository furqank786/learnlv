<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
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
        echo $request->age; die;
        if($request->input('age') <= 200 ){
            return redirect('/');
        } else{
            return view('pages/display');
        }
        return $next($request);
    }
}
