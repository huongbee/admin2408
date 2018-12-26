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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('home');
Route::get('login','HomeController@getLogin')->name('login');
Route::post('login','HomeController@postLogin')->name('login');

Route::get('register','HomeController@getRegister')->name('register');
Route::post('register','HomeController@postRegister')->name('register');


// Route::post('register',[
//     'uses'=>'HomeController@postRegister',
//     'as'=>'register'
// ]);