<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PrivilegeCategory;
use App\Models\User;
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

    public function getPrivilegeMenu(User $objUser) {
        $return = array();

        $lstPrivilegesCategories =  PrivilegeCategory::orderBy('menu_order', 'asc')->get(); 

        foreach ($lstPrivilegesCategories as $key => $privilegeCategory) {
            $lstPrivilege = $objUser->privileges
                        ->where([
                            ['privilege_category_id', $privilegeCategory->id],
                            ['menu', true],
                            ['active', true]
                        ])
                        ->sortBy('menu_order');

            if (sizeof($lstPrivilege) > 0) {
                array_push($return, array(
                    'category' => $privilegeCategory,
                    'privilege' => $lstPrivilege

                ));
            }
        }
        return $return;
    }
    
    public function prueba(){ 
        return LoginController::getPrivilegeMenu(User::find(1));
    }
}


