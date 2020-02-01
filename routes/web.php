<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/roles', 'PermissionController@Permission');

Route::group(['middleware' => 'role:developer'], function() {

    Route::get('/admin', function() {
 
       return 'Welcome Admin';
       
    });
 
 });
 