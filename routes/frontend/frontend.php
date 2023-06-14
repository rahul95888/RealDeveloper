<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@About');
Route::get('/services', 'HomeController@Services');
Route::get('/portfolio', 'HomeController@Portfolio');
Route::get('/blog', 'HomeController@Blog');
Route::get('/contact', 'HomeController@Contact');




Route::get('/viewNews/{blog}', 'HomeController@viewNews');




