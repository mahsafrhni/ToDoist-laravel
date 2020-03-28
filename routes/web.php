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
//Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
//people-just for admin
Route::get('/users', 'UsersController@index')->name('users.usersList');
Route::post('/users/edit', 'UsersController@edit')->name('users.edit');
Route::post('/users/delete', 'UsersController@delete')->name('users.delete');
Route::get('/users/{user}', 'UsersController@show($user)')->name('users.show');
//
Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
Route::get('/profile/{user}/edit', 'ProfileController@edit($user)')->name('profile.edit');
//
Route::get('/projects', 'ProjectsController@index')->name('projects.projectsList');
Route::post('/projects/add/', 'ProjectsController@add')->name('projects.add');
Route::get('/projects/{id}', 'ProjectsController@show($user)')->name('projects.show');
Route::post('/projects/update', 'ProjectsController@update')->name('projects.update');
Route::post('/projects/delete', 'ProjectsController@delete')->name('projects.delete');
Route::get('/projects/{id}/edit', 'ProjectsController@edit($user)')->name('projects.edit');
//
Route::post('/team/insert', 'TeamController@insert')->name('team.insert');
Route::get('/team/{id}/add', 'TeamController@add($id)')->name('team.add');
Route::post('/team/delete', 'TeamController@delete')->name('team.delete');
Route::post('/team/update', 'TeamController@update')->name('team.update');
Route::get('/team/{id}/edit', 'TeamController@edit($id)')->name('team.edit');
//
Route::post('/task/add', 'TasksController@add')->name('task.add');
Route::post('/task/update', 'TasksController@update')->name('task.update');
Route::post('/task/delete', 'TasksController@delete')->name('task.delete');
//
Route::post('/note/add', 'NotesController@add')->name('note.add');
Route::post('/note/update', 'NotesController@update')->name('note.update');
Route::post('/note/delete', 'NotesController@delete')->name('note.delete');
