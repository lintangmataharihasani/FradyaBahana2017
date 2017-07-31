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

Route::get('/','baseController@index');
Route::get('/home','baseController@index');
Route::get('/about','baseController@about');
Route::get('/products','baseController@products');
Route::get('/services','baseController@services');
Route::get('/dashboard','baseController@dashboard');
<<<<<<< HEAD
Route::get('/details', 'baseController@details');
=======
Route::post('/addService', 'baseController@addService');
>>>>>>> 166804aa76d3127c09b7a310a13027472160c7d7
