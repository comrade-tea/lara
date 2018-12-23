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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get("projects/{project}", 'UsersController@show');
//Route::get('users', 'UsersController@index');
//Route::get('about', 'UsersController@about');
//Route::post('users', 'UsersController@store');

//---------------

//Route::get('projects', 'ProjectsController@index');
//Route::get('projects/create', 'ProjectsController@create');
//Route::post('projects', 'ProjectsController@store');
//Route::post('projects', 'ProjectsController@store');

Route::resource('projects', 'ProjectsController');
