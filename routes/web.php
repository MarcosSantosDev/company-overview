<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::view('/create_organization_form', 'auth.create_organization_form');



Route::get('/organization_list', 'organizationController@getOrganization');

Route::post('/create_organization', 'organizationController@addOrganization');

Route::get('/edit_organization/{id}', 'organizationController@editOrganization');

Route::get('/update_organization/{id}', 'organizationController@updateOrganization');

Route::get('/delete_organization/{id}', 'organizationController@deleteOrganization');

Route::get('/find_users_organization/{id}', 'organizationController@findUsersOrganization');

Route::get('/form_add_user/{id}', 'organizationController@addUser');




Route::get('/workers_list', 'workersController@getUsers');

Route::post('/create_user/{id}','workersController@addUser');

Route::get('/edit_user/{id}', 'workersController@editUser');

Route::get('/update_user/{id}','workersController@updateUser');

Route::get('/delete_user{id}','workersController@deleteUser');

