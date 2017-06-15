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
    // Route::get('account', ['as'=>'account', 'uses'=>'AccountController@index']);
    Route::get('generate', ['as'=>'generateSecret', 'uses'=>'PageController@generateSecret']);
    Route::get('new', ['as'=>'newSecret', 'uses'=>'PageController@newSecret']);
    Route::post('storeAccount',['as'=>'storeAccount', 'uses'=>'PageController@storeAccount']);
    Route::get('saved', ['as'=>'savedSecrets', 'uses'=>'PageController@savedSecrets']);
    Route::post('storeSecret',['as'=>'storeSecret', 'uses'=>'PageController@storeSecret']);
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
