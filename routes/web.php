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

Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add')->middleware('auth');
  Route::get('http://XXXXXX.jp/XXX', 'AAAController@bbb')->middleware('auth');
  Route::get('admin/profile/create', 'ProfileController@add')->middleware('auth');
  Route::get('admin/profile/edit', 'ProfileController@edit')->middleware('auth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
