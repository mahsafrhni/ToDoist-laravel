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
        Route::delete('/{user}/delete', 'UsersController@destroy')->name('destroy');
        Route::get('/{user}/edit', 'UsersController@edit')->name('edit');
        // and also other users can access the other user's information through this route
    });

    Route::prefix('projects')->name('projects.')->group(function () {
        Route::post('/add', 'ProjectsController@store')->name('store');
        Route::get('/{id}', 'ProjectsController@show')->name('show');
        Route::put('/update', 'ProjectsController@update')->name('update');
        Route::get('/{id}/edit', 'ProjecsController@edit')->name('edit');
        Route::delete('/{id}/delete', 'ProjectsController@destroy')->name('destroy');
    });
    Route::prefix('teams')->name('teams.')->group(function () {
        Route::post('/add', 'TeamsController@store')->name('store');
        Route::get('/{id}', 'TeamsController@show')->name('show');
        Route::delete('/{id}/delete', 'TeamsController@destroy')->name('destroy');
        Route::put('/update', 'TeamsController@update')->name('update');
        Route::get('/{id}/edit', 'TeamsController@edit')->name('edit');
    });
    Route::prefix('tasks')->name('tasks.')->group(function () {
        Route::post('/add', 'TasksController@store')->name('store');
        Route::put('/update', 'TasksController@update')->name('update');
        Route::get('/{id}/edit', 'TaskController@edit')->name('edit');
        Route::delete('/{id}/delete', 'TasksController@destroy')->name('destroy');
    });
    Route::prefix('notes')->name('notes.')->group(function () {
        Route::post('/add', 'NotesController@store')->name('store');
        Route::put('/update', 'NotesController@update')->name('update');
        Route::get('/{id}/edit', 'NotesController@edit')->name('edit');
        Route::delete('/{id}/delete', 'NotesController@destroy')->name('destroy');
    });
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', 'AccountController@index')->name('index');
        Route::get('/{user}/edit', 'AccountController@edit')->name('edit');
        Route::put('/', 'AccountController@update')->name('update');
    });
});
