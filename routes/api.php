<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ConfigurationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('courses/{course}', [CourseController::class, 'showJson'])->name('courses.showCourseJson');

Route::get("students/{id}",[StudentController::class, 'showStudentJson'])->name('students.showStudentJson');

Route::get("subjects/{id}",[CourseController::class,'getSubjectsPeriodsJson'])->name('course.getSubjectsPeriodsJson');

Route::get("configurations/{id}",[ConfigurationController::class, 'getConfigurationJson'])->name('configurations.getConfigurationJson');

Route::post("data/configuration",[ConfigurationController::class,'postData'])->name('configurations.postData');

//Route::get("data/configuration",[ConfigurationController::class,'postData'])->name('configurations.postData');


//Route::get("data/configuration",[ConfigurationController::class,'showData'])->name('configurations.showData');