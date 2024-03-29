<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\AcademicCourse;
use App\Models\Student;
use App\Models\Planification;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $academicCourses = AcademicCourse::all();
        return view('course.index', compact('courses', 'academicCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::create($request->all());

        return redirect()->route('academicCourses.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
   /*  public function show(Request $request,Course $course)
    {
        $students = $course->students()->get();
       //if($request->ajax()){ 
        if ($request->accepts('application/json')) {
            return response()->json($students, 200);
        }else{
            return view('Course.show',compact('students','course'));
        }
    }  */
    
    public function show(Request $request, Course $course)
    {
        $students = $course->students()->get();

        // if ($request->expectsJson()) {
       //     return response()->json($students->toArray());
        //} 
        return view('Course.show',compact('students','course'));
        
    }

    public function showJson(Request $request, Course $course)
    {
        $students = $course->students()->get();
        return response()->json($students, 200);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('academicCourses.index');
    }

    public function crearCursos(AcademicCourse $academicCourse){
        /* $academicCourse=$course->academicCourse()->get();
        $academicCourse=$academicCourse->first(); */

       /* Planification::create($course->id);   */

        return view('course.create',compact('academicCourse'));
    }


    public function getSubjectsPeriodsJson(int $id){
        $student = Student::find($id);
        $course=$student->courses()->latest()->first();
        $subjects = $course->subjects()->get();

        
        $subjects=$course->subjects()->get();
        $course->subjects=$subjects;


        foreach($subjects as $subject)
        {
            $periods = $subject->periods()->get();
            $subject->periods = $periods;
        } 

        $data = [
            'subjects' => $subjects/* ,
            'subjects' => $subjects   */ 
        ];
        return response()->json($subjects, 200);

    }
}
