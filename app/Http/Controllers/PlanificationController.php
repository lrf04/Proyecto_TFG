<?php

namespace App\Http\Controllers;

use App\Models\Planification;
use App\Models\Course;
use Illuminate\Http\Request;

class PlanificationController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Planification::create($request->all());
        return redirect()->route('academicCourses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planification  $planification
     * @return \Illuminate\Http\Response
     */
    public function show(Planification $planification)
    {
        $days=$planification->days()->get();
    
        return view('planification.show',compact('days'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planification  $planification
     * @return \Illuminate\Http\Response
     */
    public function edit(Planification $planification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planification  $planification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planification $planification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planification  $planification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planification $planification)
    {
        $planification->delete();
        return view('academicCourse.index');
    }

    public function planificaciones(Course $course){
        $planifications = $course->planification()->get();
        $planification=$planifications->first();
        if($planification!=null){
            $course=$planification->course()->first();
        }
        else{
            return view('planification.index',compact('planifications'));

        }
        
        return view('planification.index',compact('planifications','course'));
    }

    public function crearPlanification(Course $course){
        
        return view('planification.create',compact('course'));
    }
}
