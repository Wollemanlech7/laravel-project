<?php

namespace App\Http\Controllers\Boxoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Course;
use App\Models\CourseSubject;

class SubjectController extends Controller
{   
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
        $course = $request->input('hi_course');
        $return = 0;

        $newSubject = new Subject;
        $newSubject->subject = $subject;
        $newSubject->background = "bg-purple-700";
        $newSubject->icon = "/";

        try {
            if ($newSubject->save()) {
                $newCoursesSubject = new CourseSubject;

                $newCoursesSubject->course_id = $course;
                $newCoursesSubject->subject_id = $newSubject->id;
                $newCoursesSubject->active = true;
                try {
                    if ($newCoursesSubject->save()) {                  
                        $return = [
                            'sucess' => 1,
                            'msn' => 'se guardo exitosamente'
                        ];
                    } else {
                        $return = [
                            'sucess' => 0,
                            'msn' => 'error'
                        ];
                    }
                } catch (\Throwable $th) {
                    return $th;
                }


            } else {
                $return = [
                    'sucess' => 0,
                    'msn' => 'error'
                ];
            }

        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect()->route('subject.index') ;
    }
    
}


