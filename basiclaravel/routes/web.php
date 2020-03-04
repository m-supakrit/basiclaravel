<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/testdropdown', function () {
    return view('testdropdown');
});

Route::resource('user', 'UsersController');
Route::get('/create','UsersController@create')->name('user.create');
Route::get('/findDistrictName','UsersController@findDistrictName');
Route::get('/findcode','UsersController@findcode');
Route::get('/findCustomer','UsersController@getCustomer');
Route::get('/search','SearchController@search')->name('user.search');
Route::get('/action','SearchController@action')->name('user.action');