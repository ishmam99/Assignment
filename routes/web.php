<?php


Route::get('/', function () {
    return view('home');
});
Route::get('/about','HomeController@about');
Route::get('/service','HomeController@service');
Route::get('/team','HomeController@team');
Route::get('/contact','HomeController@contact');
