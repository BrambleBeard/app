<?php

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);


/*
|--------------------------------------------------------------------------
| Place routes that require authentication here
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'onlyenabledusers']], function () {
    Route::resource('account','AccountController');
    Route::resource('secrets','SecretController');
    Route::get('generate', ['as'=>'generate', 'uses'=>'SecretController@generate']);
    Route::get('new', ['as'=>'create', 'uses'=>'SecretController@create']);
    Route::post('storeAccount',['as'=>'storeAccount', 'uses'=>'PageController@storeAccount']);
    Route::get('dashboard',['as'=>'dashboard', 'uses'=>'PageController@dashboard']);
    Route::get('saved', ['as'=>'saved', 'uses'=>'SecretController@saved']);
    Route::post('storeSecret',['as'=>'storeSecret', 'uses'=>'SecretController@storeSecret']);
});


/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
Route::get('/', ['as'=>'home', 'uses'=>'PageController@splash']);
Route::get('about',['as'=>'about', 'uses'=>'PageController@about']);
Route::get('contact',['as'=>'contact', 'uses'=>'PageController@contact']);


/*
|--------------------------------------------------------------------------
| Authentication registration routes...
|--------------------------------------------------------------------------
*/
Route::get('login',['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::get('logout',['as'=>'logout', 'uses'=>'Auth\AuthController@logout']);
Route::get('reset',['as'=>'reset', 'uses'=>'Auth\PasswordController@getEmail']);
