<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Course;
use App\Models\CourseSubject;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $objCourses = Course::where('active', 1)->get();


        $objCourseSubject = CourseSubject::where('course_subjects.active', 1)
                                            ->join('subjects', 'course_subjects.subject_id', '=', 'subjects.id')
                                            ->select( 
                                                'course_subjects.id',
                                                'course_subjects.course_id',
                                                'subjects.subject',
                                                'subjects.background'
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


