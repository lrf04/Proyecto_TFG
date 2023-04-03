<?php

namespace App\Http\Controllers;

use App\Models\Datum;
use App\Models\Student;
use Illuminate\Http\Request;

class DatumController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datum  $datum
     * @return \Illuminate\Http\Response
     */
    public function show(Datum $datum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datum  $datum
     * @return \Illuminate\Http\Response
     */
    public function edit(Datum $datum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datum  $datum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datum $datum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datum  $datum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datum $datum)
    {
        //
    }

    public function datos(Student $student)
    {
        $id=Student::find($student->id);

        return view('Datum.index',compact('student'));



    }
}
