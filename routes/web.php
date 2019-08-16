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
//     // $tasks = Task::orderBy('created_at', 'asc')->get();
//     // return view('task', [
//     //     'task' => $task
//     // ]);
//     return view('task');
// });
// Route::post('/task', 'TaskController@addTask');

// Route::delete('task/{task}', function(Task $task){
//     //
// });

Route::get('/task', 'TaskController@create');

Route::post('/task', 'TaskController@store');

Route::get('/tasks','TaskController@index');

Route::get('/tasks/{id?}','TaskController@show');

Route::post('/task/{id?}/delete','TaskController@destroy');

Route::get('/task/{id?}/edit','TaskController@edit');

Route::post('/task/{id?}/update','TaskController@update')->name("update");

Route::post('/ticket/{id?}/delete','TaskController@destroy');
