<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicCourseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\PlanificationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ConfigurationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('/register');
});

/* Login, registro y logout */
Route::get('/register',[RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login',[LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout']);


Route::resource('academicCourses', AcademicCourseController::class);


Route::get('/course/{course}',[CourseController::class, 'crearCursos'])->name('courses.crearCursos');

Route::resource('courses', CourseController::class);



Route::get('/student/{course}',[StudentController::class, 'crearAlumno'])->name('students.crearAlumno');
Route::post('/studen/{course}',[StudentController::class, 'guardarAlumno'])->name('students.guardarAlumno');
Route::delete('/stud/{student}/{course}',[StudentController::class, 'eliminarAlumno'])->name('students.eliminarAlumno'); 

Route::get('/stu/{student}',[StudentController::class, 'amigos'])->name('students.amigos');


Route::resource('students', StudentController::class);

Route::resource('configurations', ConfigurationController::class);




Route::get('/subjec/{course}',[SubjectController::class, 'asignaturas'])->name('subjects.asignaturas');
Route::get('/subject/{subject}',[SubjectController::class, 'crearAsignaturas'])->name('subjects.crearAsignaturas');

Route::get('/period/{period}',[PeriodController::class, 'crearPeriodos'])->name('periods.crearPeriodos');


Route::resource('subjects', SubjectController::class);

Route::resource('periods', PeriodController::class);


Route::get('/planificatio/{course}',[PlanificationController::class, 'planificaciones'])->name('planifications.planificaciones');
/* Route::get('/planificati/{course}',[PlanificationController::class, 'crearPlanification'])->name('planifications.crearPlanification');
 */
Route::resource('planifications', PlanificationController::class);

Route::get('/day/{day}',[DayController::class, 'crearDias'])->name('days.crearDias');

Route::resource('days', DayController::class);


Route::get('/impor/{course}/{course1}',[ImportController::class, 'importar'])->name('imports.importar'); 
Route::get('/import/{course1}',[ImportController::class, 'seleccionarCurso'])->name('imports.seleccionarCurso');
Route::resource('imports', ImportController::class);

Route::post('/frien/{student}',[FriendController::class, 'crearAlumnos'])->name('friends.crearAlumnos'); 
Route::get('/friend/{student}',[FriendController::class, 'mostrarAlumnos'])->name('friends.mostrarAlumnos'); 
Route::resource('friends', FriendController::class);

/* Route::get('/configurations/{studentId}/createWithStudent', [ConfigurationController::class,'createWithStudent'])->name('configurations.createWithStudent');
  */