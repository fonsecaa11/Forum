<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index')->name('welcome');
Route::get('/login', 'LoginController@showLogin')->name('login');
Route::get('/create', 'LoginController@showCreate')->name('create');
Route::post('/login/do', 'LoginController@login')->name('login.do');
Route::post('/create/do', 'LoginController@create')->name('create.do');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::prefix('avatars')->group(function (){
    Route::get('/{avatar}', 'AvatarsController@show')->name('avatars.show')->where(['avatar'=>'[0-9]+']);
    Route::get('/getRandom', 'AvatarsController@getRandom')->name('avatars.getRandom');
});


