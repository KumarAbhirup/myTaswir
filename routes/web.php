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

Route::resource('/pictures', 'PictureController');

Route::get('/crop', 'PictureController@crop');

Route::post('/crop', 'PictureController@cropPost');

Route::post('/like', 'PictureController@postLike')->name('like');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');

Route::get('/callback', 'SocialAuthFacebookController@callback');
