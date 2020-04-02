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
        Route::put('/update', 'UsersController@update')->name('update');
        Route::delete('/{user}/delete', 'UsersController@destroy($id)')->name('destroy');
        Route::get('/{user}/edit', 'UsersController@edit($id)')->name('edit');
        // and also other users can access the other user's information through this route
        Route::get('/{user}', 'UsersController@show($id)')->name('show');
    });

    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/', 'ProjectsController@index')->name('index');
        Route::post('/add', 'ProjectsController@store')->name('store');
        Route::get('/{id}', 'ProjectsController@show($id)')->name('show');
        Route::put('/update', 'ProjectsController@update')->name('update');
        Route::get('/{id}/edit', 'ProjecsController@edit($id)')->name('edit');
        Route::delete('/{id}/delete', 'ProjectsController@destroy($user)')->name('destroy');
    });
    Route::prefix('team')->name('team.')->group(function () {
        Route::post('/insert', 'TeamController@store')->name('store');
        Route::delete('/{id}/delete', 'TeamController@destroy($user)')->name('destroy');
        Route::put('/update', 'TeamController@update')->name('update');
        Route::get('/{id}/edit', 'TeamController@edit($id)')->name('edit');
    });
    Route::prefix('task')->name('task.')->group(function () {
        Route::post('/add', 'TasksController@store')->name('store');
        Route::put('/update', 'TasksController@update')->name('update');
        Route::get('/{id}/edit', 'TaskController@edit($id)')->name('edit');
        Route::delete('/{id}/delete', 'TasksController@destroy($user)')->name('destroy');
    });
    Route::prefix('note')->name('note.')->group(function () {
        Route::post('/add', 'NotesController@store')->name('store');
        Route::put('/update', 'NotesController@update')->name('update');
        Route::get('/{id}/edit', 'NotesController@edit($id)')->name('edit');
        Route::delete('/{id}/delete', 'NotesController@destroy($user)')->name('destroy');
    });
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', 'AccountController@index')->name('index');
        Route::get('/{user}/edit', 'AccountController@edit($user)')->name('edit');
        Route::put('/', 'AccountController@update')->name('update');
    });
});
