<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'Frontend\IndexController@getAll');
Route::get('/about', 'Frontend\IndexController@aboutPage');
Route::get('/contact', 'Frontend\IndexController@contactPage');
Route::get('/menu', 'Frontend\IndexController@menuPage');
Route::get('/reservation', 'Frontend\IndexController@reservationPage');
Route::get('/special', 'Frontend\IndexController@specialPage');

Route::resource('/contacts', 'Frontend\ContactController');
