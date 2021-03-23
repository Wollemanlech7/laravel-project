<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index() {
        return view('boxoffice.content.subjects.index');
    }

    public function create() {
        return view('boxoffice.content.subjects.create');
    }
}
