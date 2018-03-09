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

Route::get('/', 'RouteController@welcome');

Route::get('/login', 'RouteController@login');

Route::get('/register', 'RouteController@register');

Route::resource('clients', 'ClientsController');

Route::resource('orders', 'OrdersController');

Route::resource('products', 'ProductsController');

Auth::routes();

Route::get('logout', [ 'uses' => 'Auth\AuthController@getLogout', 'as' => 'logout' ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');

Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');
