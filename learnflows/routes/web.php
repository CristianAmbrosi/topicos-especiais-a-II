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

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/user',['as'=>'user','uses'=>'UserController@index']);

Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('', 							['as'=>'users',					'uses'=>'UserController@index']);
	Route::get('{id}/edit', 		['as'=>'user.edit', 		'uses'=>'UserController@edit']);
	Route::put('{id}/update', 	['as'=>'users.update', 	'uses'=>'UserController@update']);
	Route::post('store', 				['as'=>'users.store', 	'uses'=>'UserController@store']);
});

Route::group(['prefix'=>'majors', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'majors',           'uses'=>'MajorsController@index']);
});

Route::group(['prefix'=>'submajors', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'submajors',           'uses'=>'SubmajorsController@index']);
});

Route::group(['prefix'=>'cursos', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'cursos',           'uses'=>'CursosController@index']);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
