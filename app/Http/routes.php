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

Route::get('/hh', function () {
   // echo $value;
   return view('welcome');
});

Route::get('/hh2', function () {
    return view('welcome');
});

Route::get('/hh3', function () {
    return view('create');
});

Route::resource('nerds', 'NerdController');

//Route::get('/register', 'UserController@showUserRegistration');