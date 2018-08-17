<?php

Route::get('/', function () {
    return view('home');
});

Route::prefix('organization')->group(function ()
{
  Route::get('/neworganization', function(){
    return view('auth.neworganization');
  })->name('data.organization.new');

  Route::get('/', 'organizationController@getOrganizations')->name('data.organization.list');

  Route::post('/create', 'organizationController@addOrganization')->name('data.organization.create');

  Route::get('/edit/{id}', 'organizationController@editOrganization')->name('data.organization.edit');

  Route::put('/update/{id?}', 'organizationController@updateOrganization')->name('data.organization.update');

  Route::delete('/delete/{id}', 'organizationController@deleteOrganization')->name('data.organization.delete');

  Route::get('/details/{id}', 'organizationController@details')->name('data.organization.details');
});

Route::prefix('user')->group(function()
{
  Route::get('/form/{id}', 'workersController@addUser')->name('data.users.form');

  Route::get('/workers', 'workersController@getUsers')->name('data.users.list');

  Route::post('/create/{id}','workersController@addUser')->name('data.users.create');

  Route::get('/edit/{id}', 'workersController@editUser')->name('data.users.edit');

  Route::put('/update/{id}','workersController@updateUser')->name('data.users.update');

  Route::delete('/delete{id}','workersController@deleteUser')->name('data.users.delete');

  Route::get('/workers/{id?}', 'workersController@findUser')->name('data.users.find');
});
