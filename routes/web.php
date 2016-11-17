<?php

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('tabs.index');
Route::get('/dashboard/profile', 'DashboardController@index')->name('tabs.profile');

//course
Route::get('/dashboard/courses', 'DashboardController@index')->name('tabs.courses');
Route::post('/course/store', 'CourseController@store');
//scores
Route::post('/score/store', 'ScoreController@store');
//exams
Route::get('/dashboard/exams', 'DashboardController@index')->name('tabs.exams');
Route::post('/exam/store', 'ExamController@store');

Route::get('/dashboard/admin', 'DashboardController@index')->name('tabs.admin');
Route::get('/dashboard/instructor', 'DashboardController@index')->name('tabs.instructor');

