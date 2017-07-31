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
Route::post('/addService', 'baseController@addService');

=======

Route::get('/details', 'baseController@details');
Route::post('/addService', 'baseController@addService');
>>>>>>> f3a89f47a6f5571779dd039453e0bef8f651c672
