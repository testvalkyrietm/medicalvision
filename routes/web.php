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

Route::get('/registration-form', 'RegistrationController@showForm')->name('registration-form');
Route::post('/registration-form', 'RegistrationController@store');
Route::get('/registration-success', 'RegistrationController@success')->name('success');
Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home');
