<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
  Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add')->middleware('auth');
  Route::post('news/create', 'App\Http\Controllers\Admin\NewsController@create');
  Route::get('http://XXXXXX.jp/XXX', 'AAAController@bbb')->middleware('auth');
  Route::get('admin/profile/create', 'App\Http\Controllers\Admin\ProfileController@add')->middleware('auth');
  Route::get('admin/profile/edit', 'App\Http\Controllers\Admin\ProfileController@edit')->middleware('auth');
  Route::post('admin/profile/create', 'App\Http\Controllers\Admin\ProfileController@create');
  Route::post('admin/profile/edit', 'App\Http\Controllers\Admin\ProfileController@update');
});

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add')->middleware('auth');
  Route::post('news/create', 'App\Http\Controllers\Admin\NewsController@create')->middleware('auth');
  Route::get('news', 'App\Http\Controllers\Admin\NewsController@index')->middleware('auth');
  Route::get('news/edit', 'App\Http\Controllers\Admin\NewsController@edit')->middleware('auth');
  Route::post('news/edit', 'App\Http\Controllers\Admin\NewsController@update')->middleware('auth');
});

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add')->middleware('auth');
  Route::post('news/create', 'App\Http\Controllers\Admin\NewsController@create')->middleware('auth');
  Route::get('news','App\Http\Controllers\Admin\NewsController@index')->middleware('auth');
  Route::get('news/edit', 'App\Http\Controllers\Admin\NewsController@edit')->middleware('auth');
  Route::get('news/edit', 'App\Http\Controllers\Admin\NewsController@update')->middleware('auth');
  Route::get('news/delete', 'App\Http\Controllers\Admin\NewsController@delete')->middleware('auth');
})

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
