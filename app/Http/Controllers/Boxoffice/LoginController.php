<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;


class LoginController extends Controller
{
    const BOXOFFICE_SESSION = 'bdc49af8b451637f4d1a714fb922e731';

    public function index() {
        return view('boxoffice.content.login');
    }

    public function store(Request $request) {
        if(Auth::attempt([  'email'     => $request['txtEmail'],
                        'password'  => $request['txtPassword']])) {
            
            Session::put('_BOXOFFICE_SESSION_', $this::BOXOFFICE_SESSION);
            return Redirect('boxoffice');
        } else {
            // Session::flash("login_error_title", Errors::LOGIN_01_TITLE);
            // Session::flash("login_error_message", Errors::LOGIN_01_MESSAGE);
            return Redirect('boxoffice/login');
        }
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
            Session::flush();
        }
        return Redirect('boxoffice/login');
    }
}
