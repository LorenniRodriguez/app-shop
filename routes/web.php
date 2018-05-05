<?php

Route::get('/hola', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
