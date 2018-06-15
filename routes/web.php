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

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::view('/create_organization_form', 'auth.create_organization');

Route::post('/create_organization', 'organizationController@addOrganization');

Route::get('/organization_list', 'organizationController@getOrganization');

Route::get('/edit_organization/{id}', 'organizationController@editOrganization');

Route::get('/delete_organization/{id}', 'organizationController@deleteOrganization');


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/workers_list', 'workersController@getUsers');

Route::post('/create_user','workersController@addUser');

Route::get('/edit_user/{id}', 'workersController@editUser');

Route::get('/update_user/{id}','workersController@updateUser');

Route::get('/delete_user{id}','workersController@deleteUser');



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// Route::get('/list_tasks', 'workersController@getTasks');

// Route::get('/edit_task/{id}', 'workersController@editTask');

// Route::post('/create_task','workersController@addTask');

// Route::get('/update_task/{id}','workersController@updateTask');

// Route::get('/delete_task{id}','workersController@deleteTask');
