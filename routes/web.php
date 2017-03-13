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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('widget/create', ['as' => 'widget.create', 'uses' => 'WidgetController@create']);

Route::get('widget/{id}-{slug?}', ['as' => 'widget.show', 'uses' => 'WidgetController@show']);

Route::resource('widget', "WidgetController", ['except' => ['show', 'create']]);

Route::get('test', ['middleware' => ['auth', 'admin'], 'uses' => 'TestController@index']);

Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

Route::get('terms-of-service', 'PageController@terms');

Route::get('privacy', 'PagesController@privacy');