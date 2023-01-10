<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicCourseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
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

Route::resource('courses', CourseController::class);

Route::resource('students', StudentController::class);

Route::resource('configurations', ConfigurationController::class);

/* Route::get('/configurations/{studentId}/createWithStudent', [ConfigurationController::class,'createWithStudent'])->name('configurations.createWithStudent');
  */