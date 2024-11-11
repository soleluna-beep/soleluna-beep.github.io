<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class authCustom extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function redirectTo($request)
    {
        session_start();

        if (!isset($_SESSION['logged']) || $_SESSION['logged'] == false) {
            return Redirect::to(route('utente.authentication'));
        }


        return true;
    }
}
