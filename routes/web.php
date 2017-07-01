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

Route::get('/dashboard', 'HomeController@index');

// ===================================================================================
// Member
// ===================================================================================

Route::group(['prefix'=>'member', 'middleware'=>['auth', 'role:member']], function () {
	Route::get('/profile', 'HomeController@profile');
});


// ===================================================================================
// Admin
// ===================================================================================

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
	Route::get('/', 'AdminController@index');
	Route::get('/profile', 'AdminController@profile');
});


// ===================================================================================
// Owner
// ===================================================================================

Route::group(['prefix'=>'owner', 'middleware'=>['auth', 'role:owner']], function () {
	Route::get('/', 'OwnerController@index');
	Route::get('/profile', 'OwnerController@profile');
});
