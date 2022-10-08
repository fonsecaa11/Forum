<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/create', 'LoginController@create')->name('create');
Route::post('/login', 'LoginController@login')->name('login');

