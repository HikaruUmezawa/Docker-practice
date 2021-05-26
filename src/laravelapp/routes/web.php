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

Route::get('/cookie', 'HomeController@cookie')->name('cookie_home');

Route::get('/cookie/next', 'HomeController@cookie_forward')->name('cookie_next');

Route::post('/cookie/next', 'HomeController@cookie_next');

Route::post('/cookie', 'HomeController@cookie_back');

