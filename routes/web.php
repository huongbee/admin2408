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

Route::get('login','HomeController@getLogin')->name('login');
Route::post('login','HomeController@postLogin')->name('login');

Route::get('register','HomeController@getRegister')->name('register');
Route::post('register','HomeController@postRegister')->name('register');


// Route::post('register',[
//     'uses'=>'HomeController@postRegister',
//     'as'=>'register'
// ]);



Route::group(['middleware'=>'checkLogin'],function(){
    Route::get('logout','HomeController@logout')->name('logout');
    Route::get('/','HomeController@index')->name('home');
    Route::get('bill/{status}','HomeController@listBill')
            ->name('listbill')->where('status','[0-3]{1}+');
    Route::post('update-bill','HomeController@updateStatusBill')->name('updatebill');

    Route::get('list-product/{idtype}','HomeController@listProduct')->name('list-product');
    Route::get('update-product/{id}','HomeController@getUpdateProduct')->name('update-product');
    Route::post('update-product/{id}','HomeController@postUpdateProduct')->name('update-product');


    Route::get('add-product','HomeController@addProduct')->name('add-product');

});
