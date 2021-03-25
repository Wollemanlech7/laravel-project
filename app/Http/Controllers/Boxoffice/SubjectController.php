<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index() {
        return view('boxoffice.content.subjects.index');
    }

    public function create() {
        return view('boxoffice.content.subjects.create');
    }

    public function save(Request $request) {
        $subject = $request->input('txt_subject');

        $new_subject = new Subject;

        $new_subject->subject = $subject;

        $new_subject->save();
        echo "se guardo exitosamente";

    }
}


