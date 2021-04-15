<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseSubject;
use App\Models\Module;


class ModuleController extends Controller
{
    public function index($subject_id) {

        $modules = CourseSubject::join('course_subject_topics', 'course_subjects.id', '=', 'course_subject_topics.course_subject_id')
                                    ->join('modules', 'course_subject_topics.module_id', '=', 'modules.id')
                                    ->select(
                                        'modules.module'
                                    )
                                    ->where([
                                        ['modules.active', 1],
                                        ['course_subjects.id', $subject_id]
                                    ])
                                    ->get();

        return view('boxoffice.content.modules.index', ['modules' => $modules]);
    }
}
