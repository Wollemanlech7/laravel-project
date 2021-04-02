<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BoxofficeController extends Controller
{
    public function index() {
        return view('boxoffice.index');
    }
}
