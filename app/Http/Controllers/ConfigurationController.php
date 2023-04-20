<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use App\Models\Datum;
use App\Models\DatumClass;
use App\Models\DatumRecreo;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function postData(Request $request){
        $datos=$request->all();
        $datos1=json_encode($datos);

        
        //Log::info('Request:'.json_encode($datos));
        Log::info('Request:'.$datos1);
        $datos1Array = json_decode($datos1, true);

        $datosClase=$datos1Array['datos_clase'];
        $datosRecreo=$datos1Array['datos_recreo'];

        $fecha = date('Y-m-d',strtotime($datos1Array['fecha']));
        

        $dato1=Datum::create([
            'configuration_id' => $datos1Array['configuracion_id'],
            'student_id' => $datos1Array['student_id'],
            'fecha' => $fecha,
            'puntuacion' => $datos1Array['puntuacion'],
        ]);

        foreach($datosClase as $dato){
            DatumClass::create([
                'datum_id'=>$dato1->id,
                'periodo_id' => $dato['periodo_id'],
                'total_intervalos_movimiento' => $dato['total_intervalos_movimiento'],
                'total_nervioso_movimiento' => $dato['total_nervioso_movimiento'],
                'total_calmado_movimiento' => $dato['total_calmado_movimiento'],
                'total_intervalos_ritmo' => $dato['total_intervalos_ritmo'],
                'total_nervioso_ritmo' => $dato['total_nervioso_ritmo'],
                'total_calmado_ritmo' => $dato['total_calmado_ritmo'],
            ]);
        }

        DatumRecreo::create([
            'datum_id'=>$dato1->id,
            'periodo_id' => $datosRecreo['periodo_id'],
            'steps' => $datosRecreo['steps'],
            'total_movimiento' => $datosRecreo['total_movimiento'],
            'total_no_movimiento' => $datosRecreo['total_no_movimiento'],
        ]);

        return $request->all();
        //return redirect()->route('configurations.showData',$datos);
        //return response()->json($datos,201);
        
    }
    /* public function showData(Request $request){
        $datos=$request->all();
        return response()->json($datos,201);
        
    } */

    
}
