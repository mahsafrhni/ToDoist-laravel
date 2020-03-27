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
Route::post('/users/add','UsersController@add');
Route::get('/users/showAll', 'UsersController@showAll');
Route::post('/users/edit', 'UsersController@edit' );
Route::post('/users/delete', 'UsersController@delete' );
Route::get('/users/show/{$id}', 'UsersController@show($id)' );
////
//Route::get('/profile', function () {
//
//});
Route::get('/profile/editpro', 'ProfileController@showEdit' );
Route::post('/profile/edit', 'ProfileController@edit' );
//
Route::get('/projects', 'ProjectsController' );
Route::get('/projects/{$id}', 'ProjectsController@show($id)' );
Route::post('/projects/edit', 'ProjectsController@edit' );
Route::post('/projects/delete', 'ProjectsController@delete' );
Route::post('/projects/add','ProjectsController@add' );
Route::get('/projects/editinfo', 'ProjectsController@editInfo' );
//
Route::post('/team/add', 'TeamController@add' );
Route::post('/team/delete', 'TeamController@delete' );
Route::get('/team/addPage', 'TeamController@addPage' );
Route::post('/team/edit','TeamController@edit' );
Route::get('/team/editpage', 'TeamController@editPage' );
//
Route::post('/task/add', 'TasksController@add' );
Route::post('/task/edit', 'TasksController@edit' );
Route::post('/task/delete', 'TasksController@delete' );
//
Route::post('/note/add', 'NotesController@add' );
Route::post('/note/edit', 'NotesController@edit' );
Route::post('/note/delete', 'NotesController@delete' );
