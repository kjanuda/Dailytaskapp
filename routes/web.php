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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/tasks', function () {
    $data=App\Models\Task::all();

    return view('tasks')->with('tasks',$data);
});


// routes/web.php
Route::post('/saveTask', 
'App\Http\Controllers\TaskController@store'
);





Route::get('/markascompleted/{id}', 'App\Http\Controllers\TaskController@updateTaskAsCompleted')->name('updateTaskAsCompleted');

Route::get('/deleteTask/{id}', 'App\Http\Controllers\TaskController@deleteTask')->name('deleteTask');

Route::get('/markasnotcompleted/{id}', 'App\Http\Controllers\TaskController@updateTaskAsNotCompleted')->name('updateTaskAsNotCompleted');

Route::get('/updatetaskview/{id}','App\Http\Controllers\TaskController@updatetaskview')->name('updatetaskview');

Route::post('/updatetasks','App\Http\Controllers\TaskController@updatetask')->name('updatetask');