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
        Route::put('/edit', 'UsersController@edit')->name('edit');
        Route::delete('/delete', 'UsersController@delete')->name('delete');
        // and also other users can access the other user's information through this route
        Route::get('/{user}', 'UsersController@show')->name('show');
    });

    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', 'ProjectsController@index')->name('index');
        Route::post('/add', 'ProjectsController@add')->name('add');
        Route::get('/{id}', 'ProjectsController@show($user)')->name('show');
        Route::put('/update', 'ProjectsController@update')->name('update');
        Route::delete('/delete', 'ProjectsController@delete')->name('delete');
        Route::get('/edit', 'ProjectsController@edit')->name('edit');
    });
    Route::prefix('team')->name('team.')->group(function () {
        Route::post('/insert', 'TeamController@insert')->name('insert');
        Route::delete('/delete', 'TeamController@delete')->name('delete');
        Route::put('/update', 'TeamController@update')->name('update');
        Route::get('/{id}/edit', 'TeamController@edit')->name('edit');
    });
    Route::prefix('task')->name('task.')->group(function () {
        Route::post('/add', 'TasksController@add')->name('add');
        Route::put('/update', 'TasksController@update')->name('update');
        Route::delete('/delete', 'TasksController@delete')->name('delete');
    });
    Route::prefix('note')->name('note.')->group(function () {
        Route::post('/add', 'NotesController@add')->name('add');
        Route::put('/update', 'NotesController@update')->name('update');
        Route::delete('/delete', 'NotesController@delete')->name('delete');
    });
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', 'AccountController@index')->name('edit');
        Route::put('/', 'AccountController@update')->name('update');
    });
});
