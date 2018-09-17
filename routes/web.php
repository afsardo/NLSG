<?php

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/games', function () {
        return view('games');
    })->name('games');

    Route::get('/resources', function () {
        return view('resources');
    })->name('resources');

    Route::get('/sessions', function () {
        return view('sessions');
    })->name('sessions');
});
