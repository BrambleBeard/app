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
    Route::get('account', ['as'=>'account', 'uses'=>'AccountController@index']);
    Route::get('generate', ['as'=>'generateSecret', 'uses'=>'PagesController@generateSecret']);
    Route::get('new', ['as'=>'newSecret', 'uses'=>'PagesController@newSecret']);
    Route::post('storeAccount',['as'=>'storeAccount', 'uses'=>'PagesController@storeAccount']);
    Route::get('saved', ['as'=>'savedSecrets', 'uses'=>'PagesController@savedSecrets']);
    Route::post('storeSecret',['as'=>'storeSecret', 'uses'=>'PagesController@storeSecret']);
});


/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
Route::get('/', ['as'=>'home', 'uses'=>'PagesController@splash']);
Route::get('about',['as'=>'about', 'uses'=>'PagesController@about']);
Route::get('contact',['as'=>'contact', 'uses'=>'PagesController@contact']);


/*
|--------------------------------------------------------------------------
| Authentication registration routes...
|--------------------------------------------------------------------------
*/
Route::get('login',['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::get('logout',['as'=>'logout', 'uses'=>'Auth\AuthController@logout']);
Route::get('reset',['as'=>'reset', 'uses'=>'Auth\PasswordController@getEmail']);
