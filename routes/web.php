<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IndexController@index')->name('welcome');
Route::post('/create', 'LoginController@create')->name('create');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::prefix('avatars')->group(function (){
    Route::get('/{avatar}', 'AvatarsController@show')->name('avatars.show')->where(['avatar'=>'[0-9]+']);
    Route::get('/getRandom', 'AvatarsController@getRandom')->name('avatars.getRandom');
});


