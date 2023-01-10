<?php

namespace App\Http\Controllers;

use App\Models\AcademicCourse;
use Illuminate\Http\Request;

class AcademicCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicCourses = AcademicCourse::all();
        return view('academicCourse.index',compact('academicCourses')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AcademicCourse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Para mostrar los datos que se envian desde el formulario
        //return $request->all();

        AcademicCourse::create($request->all());

        return redirect()->route('academicCourses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicCourse  $academicCourse
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicCourse $academicCourse)
    {
        //$academicCourses = AcademicCourse::all();
        //$academicCourses = AcademicCourse::all();

        $academicCourses = AcademicCourse::all();
        $courses = $academicCourse->courses()->get();
        return view('Course.index',compact('academicCourses','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicCourse  $academicCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicCourse $academicCourse)
    {
        return view('AcademicCourse.edit',compact('academicCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademicCourse  $academicCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicCourse $academicCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicCourse  $academicCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicCourse $academicCourse)
    {
        //
    }
}
