<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CoursesSubject;
use App\Models\Module;


class ModuleController extends Controller
{
    public function index($subject_id) {

        $modules = CoursesSubject::join('courses_subjects_topics', 'courses_subjects.id', '=', 'courses_subjects_topics.course_subject_id')
                                    ->join('modules', 'courses_subjects_topics.module_id', '=', 'modules.id')
                                    ->select(
                                        'modules.module'
                                    )
                                    ->where([
                                        ['modules.active', 1],
                                        ['courses_subjects.id', $subject_id]
                                    ])
                                    ->get();

        return view('boxoffice.content.modules.index', ['modules' => $modules]);
    }
}
