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

Route::any('/', ['as' => 'hello', 'uses' => 'HelloController@index']);
//Route::any('/index', ['as' => 'hello', 'uses' => 'HelloController@index']);

Route::any('/page/about', ['as' => 'about', 'uses' => 'AboutController@index']);

Route::any('/page/career', ['as' => 'career', 'uses' => 'CareerController@index']);

Route::any('/page/portfolio', ['as' => 'portfolio', 'uses' => 'PortfolioController@index']);
