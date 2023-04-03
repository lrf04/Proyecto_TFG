<?php

namespace App\Http\Controllers;

use App\Models\Datum;
use App\Models\Period;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

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

    public function showDatosClase(Student $student,Request $request)
    {
        
        $date=$request->date;
        
        $dato=$student->data->where('fecha',$date)->first();
        $datoBueno=Datum::find($dato->id);
        $datosClase=$datoBueno->datumClasses;
        $periodos=array();
        $asignaturas=array();
        foreach($datosClase as $datoClase){
            $id=$datoClase->periodo_id;
            $periodo=Period::find($id);
            $subject=$periodo->subject;
            array_push($periodos,Period::find($id));
            array_push($asignaturas,$subject);
        }


       
        //return $asignaturas;
        return view('Datum.show',compact('student','datoBueno','datosClase','periodos','asignaturas'));
        
    }
}
