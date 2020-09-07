<?php

use Illuminate\Support\Facades\Route;
use App\Student;
use App\Address;
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
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students', 'StudentsController');
Route::resource('courses', 'CoursesController');
Route::resource('teachers', 'TeachersController');
Route::resource('student_classes', 'StudentClassesController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
