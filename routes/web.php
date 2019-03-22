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


Route::get('/projects', function(){
  $projects = App\Project::all();

  return view('projects.index', compact('projects'));
});

Route::post('/projects', function(){
    // Validate data, persist, redirect.

    App\Project::create(request(['title', 'description']));
});
