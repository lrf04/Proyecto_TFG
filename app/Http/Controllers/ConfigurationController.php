<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Student;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
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
        return view('configuration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        Configuration::create($request->all());
        $student=Student::find($request->student_id);
        return redirect()->route('students.show',$student);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show(Configuration $configuration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        return view('configuration.edit',compact('configuration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuration $configuration)
    {
        /* return $request->all(); */
        $configuration->update($request->all());
        //return redirect()->route('configurations.edit', $configuration);
        $student=$configuration->student()->get();
        //return $student->first(); 
        return redirect()->route('students.show',$student->first());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
        $configuration->delete();
        $student=$configuration->student()->get();
        //return $student->first(); 
        return redirect()->route('students.show',$student->first());
    }

    /* public function createWithStudent(int $studentId)
    {
        return view('configuration.create',compact('studentId'));
    } */

    public function crearConfiguracion(Student $student){

        return view('configuration.create',compact('student'));

    }

    public function getConfigurationJson(int $id){
        $student=Student::find($id);
        $configurations=$student->configurations()->get();
        $configuration=$configurations->where('activar','activada')->first();

        return $configuration;
    }
}
