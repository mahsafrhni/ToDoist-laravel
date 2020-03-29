<?php

use Illuminate\Support\Facades\Auth;
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
Route::middleware('throttle:15,1')->group(function () {
    Auth::routes();
});
Route::middleware(['auth', 'throttle:30,1'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    //users-just for admin
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', 'UsersController@index')->name('index');
        Route::post('/edit', 'UsersController@edit')->name('edit');
        Route::post('/delete', 'UsersController@delete')->name('delete');
        Route::get('/{user}', 'UsersController@show($user)')->name('show');
    });
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::post('/update', 'ProfileController@update')->name('update');
        Route::get('/{user}/edit', 'ProfileController@edit($user)')->name('edit');
    });
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', 'ProjectsController@index')->name('index');
        Route::post('/add', 'ProjectsController@add')->name('add');
        Route::get('/{id}', 'ProjectsController@show($user)')->name('show');
        Route::post('/update', 'ProjectsController@update')->name('update');
        Route::post('/delete', 'ProjectsController@delete')->name('delete');
        Route::get('/edit', 'ProjectsController@edit($user)')->name('edit');
    });
    Route::prefix('team')->name('team.')->group(function () {
        Route::post('/insert', 'TeamController@insert')->name('insert');
        Route::post('/delete', 'TeamController@delete')->name('delete');
        Route::post('/update', 'TeamController@update')->name('update');
        Route::get('/{id}/edit', 'TeamController@edit($id)')->name('edit');
    });
    Route::prefix('task')->name('task.')->group(function () {
        Route::post('/add', 'TasksController@add')->name('add');
        Route::post('/update', 'TasksController@update')->name('update');
        Route::post('/delete', 'TasksController@delete')->name('delete');
    });
    Route::prefix('note')->name('note.')->group(function () {
        Route::post('/add', 'NotesController@add')->name('add');
        Route::post('/update', 'NotesController@update')->name('update');
        Route::post('/delete', 'NotesController@delete')->name('delete');
    });
});
