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

// Route::get('/', function () {
//     return view('tasks');
// });

//Display Tasks
Route::get('tasks','TasksController@index');
Route::get('tasks/{tasks}','TasksController@show');

//add new task
Route::post('tasks/add','TasksController@add');

//edit
Route::get('tasks/{tasks}/edit','TasksController@edit');
Route::patch('tasks/{tasks}', 'TasksController@update');

// delete
Route::get('tasks/{tasks}/delete','TasksController@delete');