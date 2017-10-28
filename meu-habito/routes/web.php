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
/**
Route::get('habitos', 'HabitosConstroller@index');
Route::get('habitos/create', 'HabitosConstroller@create');
Route::post('habitos/store', 'HabitosConstroller@store');
Route::get('habitos/{id}/destroy', 'HabitosConstroller@destroy');
Route::get('habitos/{id}/edit', 'HabitosConstroller@edit');
Route::put('habitos/{id}/update', 'HabitosConstroller@update');
**/

// Organizando as Rotas
Route::group(['prefix'=>'habitos', 'where'=>['id'=>'[0-9]+']], function(){
	Route::get('', 							['as'=>'habitos', 				'uses'=>'HabitosConstroller@index']);
	Route::get('create', 				['as'=>'habitos.create', 	'uses'=>'HabitosConstroller@create']);
	Route::get('{id}/destroy', 	['as'=>'habitos.destroy', 'uses'=>'HabitosConstroller@destroy']);
	Route::get('{id}/edit', 		['as'=>'habitos.edit', 		'uses'=>'HabitosConstroller@edit']);
	Route::put('{id}/update', 	['as'=>'habitos.update', 	'uses'=>'HabitosConstroller@update']);
	Route::post('store', 				['as'=>'habitos.store', 	'uses'=>'HabitosConstroller@store']);
});

Route::group(['prefix'=>'historicos', 'where'=>['id'=>'[0-9]+']], function() {
  Route::get('',              ['as'=>'historicos',           'uses'=>'HistoricosController@index']);
  Route::get('create',        ['as'=>'historicos.create',    'uses'=>'HistoricosController@create']);
  Route::get('{id}/destroy',  ['as'=>'historicos.destroy',   'uses'=>'HistoricosController@destroy']);
  Route::get('{id}/edit',     ['as'=>'historicos.edit',      'uses'=>'HistoricosController@edit']);
  Route::put('{id}/update',   ['as'=>'historicos.update',    'uses'=>'HistoricosController@update']);
  Route::post('store',        ['as'=>'historicos.store',     'uses'=>'HistoricosController@store']);
});
