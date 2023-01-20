<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\AcademicCourse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {   
        //return $course->all();
        return view('Student.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Course $course)
    {
       /*  $newStudent = Student::create($request->all()); 
        $newStudent->courses()->attach($course->id); */
        //Student::create($request->all());
        $courses = Course::all();
        $academicCourses = AcademicCourse::all();
        return view('course.index', compact('courses', 'academicCourses')); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $configurations=$student->configurations()->get();
        return view('Student.show',compact('configurations'));
        //return view('Student.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        /* $student->courses()->detach($course->id);
        $student->delete();
        $course=$student->course()->get();

        return redirect()->route('courses.show',$course->first()); */
    }

    public function crearAlumno(Course $course)
    {
        return view('Student.create',compact('course'));
    }

    public function guardarAlumno(Request $request,Course $course)
    {
        $newStudent = Student::create($request->all()); 
        $newStudent->courses()->attach($course->id);
        $academicCourse=$course->academicCourse()->get();
        /* $courses=$academicCourse->courses()->get();  */
    
        return redirect()->route('academicCourses.index');
    }

    public function eliminarAlumno(Student $student,Course $course)
    {
        /* $student->courses()->detach($course->id); */
        $student->delete();
        

        return redirect()->route('courses.show',$course);
    }

    public function amigos(Student $student)
    {
        $amigos=$student->friends()->get();
        return view('Friend.index',compact('student','amigos'));
    }
}
