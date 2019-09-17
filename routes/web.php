<?php


Route::get('/', function () {
    return view('home');
});
Route::get('/about','HomeController@about');
Route::get('/service','HomeController@service');
Route::get('/team','HomeController@team');
Route::get('/contact','HomeController@contact');
Route::get('/employee','HomeController@employee');
Route::post('store','HomeController@store');
Route::get('list','HomeController@list');
Route::get('edit/{id}','HomeController@edit');
Route::post('update/{id}','HomeController@update');
Route::get('delete/{id}','HomeController@delete');