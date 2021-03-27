<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index() {
        return view('boxoffice.content.modules.modules');
    }
}
