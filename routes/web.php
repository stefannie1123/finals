<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::patch('/users/{id}', 'UserController@update');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::delete('/users', 'UserController@delete');

Route::get('/instructors', 'InstructorController@index');
Route::post('/instructors', 'InstructorController@store');
Route::patch('/instructors/{user_id}', 'InstructorController@update');
Route::get('/instructors/create', 'InstructorController@create');
Route::get('/instructors/edit/{user_id}', 'InstructorController@edit');
Route::delete('/instructors', 'InstructorController@delete');

Route::get('/learners', 'LearnerController@index');
Route::post('/learners', 'LearnerController@store');
Route::patch('/learners/{user_id}', 'LearnerController@update');
Route::get('/learners/create', 'LearnerController@create');
Route::get('/learners/edit/{user_id}', 'LearnerController@edit');
Route::delete('/learners', 'LearnerController@delete');

Route::get('/courses', 'CourseController@index');
Route::post('/courses', 'CourseController@store');
Route::patch('/courses/{id}', 'CourseController@update');
Route::get('/courses/create', 'CourseController@create');
Route::get('/courses/edit/{id}', 'CourseController@edit');
Route::delete('/courses', 'CourseController@delete');