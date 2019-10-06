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
Route::resource('product','ProductController');
Route::get('/data','TestController@test');
Route::get('insert','ProductController@insert');
Route::post('create','ProductController@insertform');
Route::get('product/delete/{id}','ProductController@delete');
Route::get('product/edit/{id}','ProductController@edit');
Route::post('save','ProductController@update');