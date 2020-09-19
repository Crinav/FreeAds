<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/login', 'HomeController@login')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home']);



Auth::routes(['verify' => true]);
Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user/index', ['uses' => 'UserController@index', 'as' => 'user.index']);
Route::get('/user/create', 'UserController@create');
Route::get('/user/{id}/destroy', ['uses' => 'UserController@destroy' , 'as' => 'user.destroy']);
Route::get('/user/{id}/update', ['uses' => 'UserController@update' , 'as' => 'user.update']);
Route::get('/user/{id}', ['uses' => 'UserController@show' , 'as' => 'user.show']);
Route::get('/user/{id}/edit', ['uses' => 'UserController@edit' , 'as' => 'user.edit']);

Route::get('/article/index', ['uses' => 'ArticleController@index', 'as' => 'art.index']);
Route::get('/article/create', 'ArticleController@create');
Route::post('/article/store', ['uses' => 'ArticleController@store', 'as' => 'art.store']);
Route::get('/article/{id}/destroy', ['uses' => 'ArticleController@destroy' , 'as' => 'art.destroy']);
Route::post('/article/{id}/update', ['uses' => 'ArticleController@update' , 'as' => 'art.update']);
Route::get('/article/{id}', ['uses' => 'ArticleController@show' , 'as' => 'art.show']);
Route::get('/article/{id}/edit', ['uses' => 'ArticleController@edit' , 'as' => 'art.edit']);
Route::get('/article/search', ['uses' => 'ArticleController@search' , 'as' => 'art.search']);
Route::get('/article/{id}/showOne', ['uses' => 'ArticleController@showOne' , 'as' => 'art.showOne']);

Route::get('/message/{id}/create', ['uses' => 'MessageController@create' , 'as' => 'mess.create']);
Route::post('/message/store', ['uses' => 'MessageController@store' , 'as' => 'mess.store']);
