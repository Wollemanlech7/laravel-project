<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Course;
use App\Models\CoursesSubject;

class SubjectController extends Controller
{
    public function index() {
        $objCourses = Course::where('active', 1)->get();


        $objCourseSubject = CoursesSubject::where('courses_subjects.active', 1)
                                            ->join('subjects', 'courses_subjects.subject_id', '=', 'subjects.id')
                                            ->select(
                                                'courses_subjects.id',
                                                'courses_subjects.course_id',
                                                'subjects.subject'
                                            )
                                            ->get();


        return view('boxoffice.content.subjects.index', [
                                                            'objCourses'        => $objCourses,
                                                            'objCourseSubject'  => $objCourseSubject
                                                        ]);
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


