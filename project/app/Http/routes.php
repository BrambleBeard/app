<?php

/*
|--------------------------------------------------------------------------
| Place routes that require authentication here
|--------------------------------------------------------------------------
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
Route::group(['middleware' => ['auth', 'onlyenabledusers']], function () {
    // Route::get('/account',['as'=>'account', 'uses'=>'PagesController@account']);
});

/*
|--------------------------------------------------------------------------
| Place routes that DO NOT require authentication here
|--------------------------------------------------------------------------
*/
Route::get('/', ['as'=>'home', 'uses'=>'PagesController@splash']);
Route::get('about',['as'=>'about', 'uses'=>'PagesController@about']);
Route::get('contact',['as'=>'contact', 'uses'=>'PagesController@contact']);
Route::post('storeSecret',['as'=>'storeSecret', 'uses'=>'PagesController@storeSecret']);
Route::post('storeContact',['as'=>'storeContact', 'uses'=>'PagesController@storeContact']);
// Authentication registration routes...
Route::get('login',['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::get('logout',['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);
Route::get('reset',['as'=>'reset', 'uses'=>'Auth\PasswordController@getEmail']);
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
