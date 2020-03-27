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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//people-just for admin
//Route::post('/users/add','UsersController@add');
Route::get('/users', 'UsersController@showAll')->name('users.usersList');
Route::post('/users/edit', 'UsersController@edit')->name('users.edit');
Route::post('/users/delete', 'UsersController@delete')->name('users.delete');
Route::get('/users/{$id}', 'UsersController@show($id)')->name('users.show');
////
//Route::get('/profile', function () {
//
//});
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
//
Route::get('/projects', 'ProjectsController@index')->name('projects.projectsList');
Route::get('/projects/{$id}', 'ProjectsController@show($id)')->name('projects.show');
Route::post('/projects/update', 'ProjectsController@update')->name('projects.update');
Route::post('/projects/delete', 'ProjectsController@delete')->name('projects.delete');
Route::post('/projects/add', 'ProjectsController@add')->name('projects.add');
Route::get('/projects/edit', 'ProjectsController@edit')->name('projects.edit');
//
Route::post('/team/add', 'TeamController@add')->name('team.add');
Route::post('/team/delete', 'TeamController@delete')->name('team.delete');
Route::get('/team/add', 'TeamController@add')->name('team.add');
Route::post('/team/update', 'TeamController@update')->name('team.update');
Route::get('/team/edit', 'TeamController@editPage')->name('team.edit');
//
Route::post('/task/add', 'TasksController@add')->name('task.add');
Route::post('/task/edit', 'TasksController@edit')->name('task.edit');
Route::post('/task/delete', 'TasksController@delete')->name('task.delete');
//
Route::post('/note/add', 'NotesController@add')->name('note.add');
Route::post('/note/edit', 'NotesController@edit')->name('note.edit');
Route::post('/note/delete', 'NotesController@delete')->name('note.delete');
