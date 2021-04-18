<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Controllers\Boxoffice\LoginController;
use App\Http\Controllers\Boxoffice\BoxofficeController;

use Closure;
use Session;
use Auth;

class BoxofficeAuth
{
    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (    Auth::check() 
                && Session::has('_BOXOFFICE_SESSION_')
                && Session::get('_BOXOFFICE_SESSION_') == LoginController::BOXOFFICE_SESSION
        ) {
            if (!Session::has('privilegesMenu')) {
                Session::put("privilegesMenu", BoxofficeController::getPrivilegeMenu(Auth::user()));
            }   
            View()->share('_PRIVILEGES_MENU_', Session::get('privilegesMenu'));
            return $next($request);
        } else {
            return redirect()->route('boxoffice.login');
        }
    }

}
