<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class ProfileController extends Controller
{
    public function index() {
        return view('boxoffice.content.profile.index');

    }
}
