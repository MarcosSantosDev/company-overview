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

Route::get('/list_func', 'RegisterController@getUsers');

Route::get('/edit/{id}', 'RegisterController@editUser');

Route::post('/create_user','RegisterController@addUser');

Route::get('/update/{id}','RegisterController@updateUser');

Route::get('/delete_user{id}','RegisterController@deleteUser');
