<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;


class DashboardLoginController extends Controller
{
    const DASHBOARD_SESSION = 'bdc49af8b451637f4d1a714fb922e786';

    public function index(){
        return view("dashboard.content.login.index");
    }

    public function store(Request $request){
        if(Auth::attempt([  'email'     => $request['txtEmail'],
                            'password'  => $request['txtPassword']  ])) {
            
            Session::put('_DASHBOARD_SESSION_', $this::DASHBOARD_SESSION);
            return Redirect('dashboard');
        } else {
            // Session::flash("login_error_title", Errors::LOGIN_01_TITLE);
            // Session::flash("login_error_message", Errors::LOGIN_01_MESSAGE);
            return Redirect('dashboard/login');
        }
    }

    public function logout(){
        if(Auth::check()) {
            Auth::logout();
            Session::flush();
        }
        return redirect()->route('dashboard.login');
    }

    
    
}
