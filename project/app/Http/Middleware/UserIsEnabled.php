<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class UserIsEnabled
{
    /**
     * Implement Guard
     *
     * @var Guard
     */
     protected $guard;

    /**
     * Handle an incoming request.
     *
     * @param  Guard $auth
     * @return void
     */
     public function __construct(Guard $auth){
         $this->guard = $auth;
     }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! $this->guard->user()->status == "1"){
            $this->guard->logout();
            return redirect('/');
        }

        return $next($request);
    }
}
