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

// home index
Route::get('/', 'RemiderController@home');
// page add remider type
Route::get('/Remider_type', "RemiderTypeController@showNewRemidertype");
// call controller RemiderController @addRemider
Route::post('/remider/new','RemiderController@addRemider');
// call controller RemiderController @deleteRemider
Route::delete('/remider/delete', 'RemiderController@deleteRemider');
// call controller RemiderController @addRemiderType
Route::post('/Remider_type/new','RemiderTypeController@addRemiderType');