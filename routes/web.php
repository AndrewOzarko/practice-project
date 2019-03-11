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
});

Route::get('create-group', 'GroupController@createGroupPage');
Route::get('groups', 'GroupController@getGroups');
Route::get('groups/{name}', 'GroupController@getGroupByName');
Route::get('groups/delete/{name}', 'GroupController@deleteGroupByName');
Route::post('groups', 'GroupController@createGroup');


Route::get('create-student', 'StudentController@createStudentPage');
Route::get('students', 'StudentController@getStudents');
Route::post('students', 'StudentController@createStudent');
Route::get('students/{id}', 'StudentController@getStudentById');
Route::get('students/delete/{id}', 'StudentController@deleteStudentById');
