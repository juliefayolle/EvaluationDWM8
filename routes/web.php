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

Route::get('/', 'BaseController@index');
Route::get('/create', 'CreateController@index');


Route::post('/dog/insert', 'DogController@insertOne');
Route::post('/dog/update', 'DogController@updateOneAction');

Route::get('/dog/delete/{id}', 'DogController@deleteOne');
Route::get('/dog/update/{id}', 'DogController@updateOne');
