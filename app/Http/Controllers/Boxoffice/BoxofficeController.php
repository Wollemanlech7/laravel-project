<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PrivilegeCategory;
use App\Models\PrivilegeIcon;
use App\Models\User;
use Auth;
use Session;

class BoxofficeController extends Controller
{
    public function index() {
        return view('boxoffice.index');
    }

    public static function getPrivilegeMenu(User $objUser) {
        $return = array();
        $lstPrivilegesCategories =  PrivilegeCategory::orderBy('position', 'asc')->get();

        foreach ($lstPrivilegesCategories as $privilegeCategory) {
            $lstPrivilege = $objUser->privileges()
                        ->where([
                            ['privilege_category_id', $privilegeCategory->id],
                            ['active', true]
                        ])
                        ->get();

            $lstIconPrivilege = PrivilegeCategory::find($privilegeCategory->id)->privilegeIcon;

            if (sizeof($lstPrivilege) > 0) {
                array_push($return, array(
                    'category'  => $privilegeCategory,
                    'icon'      => $lstIconPrivilege,
                    'privilege' => $lstPrivilege
                ));
            }
        }

        return $return;
    }

    public function prueba() {
        Session::put('prueba', BoxofficeController::getPrivilegeMenu(Auth::user()));

        return Session::get('prueba');
    }
}
