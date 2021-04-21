<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidateUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
        $tipoUsuario = explode('-',$role);
        if($user == null) {
            return redirect()->route('homepage');
        }
         else {
            foreach($tipoUsuario as $tipo) {
                if ($user->rol == $tipo) {

                    return $next($request);
                }
            }
            abort(403);
        }
    }
}
