<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PrivilegeCategory;
use App\Models\User;

class BoxofficeController extends Controller
{
    public function index() {
        return view('boxoffice.index');
    }

    public static function getPrivilegeMenu(User $objUser) {
        $return = array();
        $lstPrivilegesCategories =  PrivilegeCategory::orderBy('menu_order', 'asc')->get(); 

        foreach ($lstPrivilegesCategories as $privilegeCategory) {
            $lstPrivilege = $objUser->privileges()
                        ->where([
                            ['privilege_category_id', $privilegeCategory->id],
                            ['menu', true],
                            ['active', true]
                        ])
                        ->get();

            if (sizeof($lstPrivilege) > 0) {
                array_push($return, array(
                    'category' => $privilegeCategory,
                    'privilege' => $lstPrivilege
                ));
            }
        }

        return $return;
    }
}
