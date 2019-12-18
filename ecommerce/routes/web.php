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
Route::get('/home', function(){
    return view('home');
});

Route::get('/about', function(){
    return "Hello world";
});

Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');

Route::group(['prefix'=> 'admin', 'namespace'=>'Admin', 'middleware'=>'master'], function(){
    Route::get('/', 'AdminUserController@index');
    Route::get('users', 'AdminUserController@index');
    Route::get('users/edit/{id}', 'AdminUserController@edit');
    Route::post('users/edit/{id}', 'AdminUserController@update');

    Route::get('roles/create', 'RoleController@create');
    Route::post('roles/create', 'RoleController@store');
});

Route::group(['prefix'=>'dashboard', 'namespace'=>'Dash', 'middleware'=>'manager'], function(){
    Route::get('/', 'DashUserController@show');
});
