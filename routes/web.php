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

Route::get('/','WelcomeController@index');

Auth::routes();
Route::get('index','WelcomeController@index')->name('index');
Route::post('client/save','ClientController@storeClient')->name('storeClient');
Route::post('freelancer/save','ClientController@storeFreelancer')->name('storeFreelancer');
Route::get('about','WelcomeController@about')->name('whoUs');
//  Route::get('/{slug}','WelcomeController@success')->name('success');
Route::get('client','WelcomeController@createClient')->name('createClient');
Route::get('freelancer','WelcomeController@createFreelancer')->name('createFreelancer');
Route::get('freelancerPage','WelcomeController@freelancerInto')->name('freelancerPage');
Route::get('/home', 'HomeController@index')->name('home');
