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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::get('/users/delete/{id}', 'UserController@delete');

Route::get('/users/edit/{id}', 'UserController@showed');

Route::post('/users/edit/{id}', 'UserController@update');