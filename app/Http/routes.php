<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('todo.index');
});

//Approach: change route access for each todo list task here by
//running through each of the items an array of the todo list tasks
// and redirecting to the specific todo list page
Route::get('/todo/$id', function () {
    return redirect()->route('todo.index');
});

Route::resource('todo', 'TodoController');
